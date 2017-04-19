<?php
function school_menu(){
    $items ['file-uploader'] = array(
        'tilte'=> 'Upload A File',
        'type'=> NORMAL_MENU_ITEM,
        'description'=>'Import a csv file',
        'page callback'=>'drupal_get_form',
        'page arguments'=>array('school_import_form'),
    );
   return $items;
    
}
function school_import_form($form,&$form_state){
     $form['notes'] = array(
    '#type' => 'markup',
    '#markup' => '<div class="import-notes">A few notes when uploading. <ul><li>Make sure the file is in a .csv format.</li><li>Columns should be in *this* order</li><li>Be sure to click the "Upload" button when you select a csv.</li></ul></div>',
    '#upload_location' => 'public://tmp/',
  );
    $form ['import']= array(
        '#title'=>t('Importer'),
        '#type'=>'managed_file',
        '#description'=>t('The uploaded csv file is imported here'),
        '#upload_location'=>'public://tmp/',
         '#upload_validators'=> array(
         file_validate_extensions =>array('csv'),
             ),
        
    );
    $form['submit'] = array (
    '#type' => 'submit',
    '#value' => t('Importer'),
  );
  return $form;
}
function school_import_form_submit($form,$form_state){
    
}
function school_import_batchprocessing(){
    
}