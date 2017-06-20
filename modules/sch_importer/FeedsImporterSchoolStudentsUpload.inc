<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FeedsImporterSchoolStudentsUpload extends FeedsProcessor{
  
  
  protected function entityDeleteMultiple($entity_ids) {
    
  }

  protected function entitySave($entity) {
    
  }

  protected function newEntity(FeedsSource $source) {
    
  }
  
  protected function entityLoad(FeedsSource $source, $entity_id) {
   
  }

  public function entityType() {
    return 'user';
  }
  public function process(FeedsSource $source, FeedsParserResult $parser_result) {
    $transaction = db_transaction();
    $cached = cache_get('sch_importer_status_progress');
    $errors = array();
    $row = 0;
    if (is_object($cached)) {
      $data = $cached->data;
      $errors = $data['errors'];
      $row = $data['row'];
    }
    $col_map = array();
    foreach ($this->config['mappings'] as $mapping) {
      $col_map[drupal_strtolower($mapping['source'])] = $mapping['target'];
    }
    $students = db_select('sch_student',s)->fields('s', array('student_id', 'student_id'))->execute()->fetchAllKeyed();
    $mapping = $this->getMappingTargets();
    while($item =$parser_result->shiftItem()){
      $row++;
      $error =FALSE;
      $data = array();
      foreach ($item as $key => $lvalue){
        $value = trim($lvalue);
        $msg = '';
        if (!empty($value)) {
          if (isset($mapping[$col_map[$key]]['length']) && strlen($value) > $mapping[$col_map[$key]]['length']) {
            $msg = 'Field ' . $mapping[$col_map[$key]]['student_name'] . ' must be less than or equal to ' . $mapping[$col_map[$key]]['length'] . ' characters in row ' . $row;
            $error = TRUE;
          }
        }
          elseif ($mapping[$col_map[$key]]['mandatory']) {
          $msg = 'Field ' . $mapping[$col_map[$key]]['student_name'] . ' cannot be empty in row ' . $row;
          $error = TRUE;
        }
       
    }
     if (!$error) {
        //update if is existing
        try {
          if (isset($students[$data['student_id']])) {
            if (!empty($students[$data['student_id']])) {
              db_update('sch_student')->fields($data)->condition('student_id', $students[$data['student_id']], '=')->execute();
            }
          }
          else {
            //else insert
            $iquery = db_insert('sch_student')->fields($data)->execute();
            
          }
        }
        catch (Exception $ex) {
          $transaction->rollback();
          watchdog_exception('php', $ex);
        }
      }
    }
       if ($source->progressImporting() == FEEDS_BATCH_COMPLETE) {
      cache_set('sch_importer_status', array('errors' => $errors, 'row' => $row));
      cache_clear_all('sch_importer_status_progress', 'cache');
    }
    else {
      cache_set('sch_importer_status_progress', array('errors' => $errors, 'row' => $row));
    }
  }
  
  protected function entityInfo() {
    $info = parent::entityInfo();
    $info['label plural'] = t('Entries');
    return $info;
  }
  
  public function getMappingTargets() {
   return array(
    
     'student_name' => array(
        'name' => t('Student_name'),
        'description' => t('Student Name'),
        'mandatory' => TRUE,
        'length' => 10,
        'exists' => TRUE
      ),
     'student_email' => array(
        'name' => t('Student_email'),
        'description' => t('Student Email'),
        'mandatory' => TRUE,
        'length' => 20,
        'exists' => TRUE
      ),
   );
  }
public function itemCount(FeedsSource $source) {
  $query = db_select('sch_student', 's');
    $query->addExpression('count(*)');
    return $query->execute()->fetchField();
}
}