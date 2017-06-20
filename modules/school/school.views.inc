<?php
/*
 * View Student details
 */

function school_views_data(){
    $data =array();
    _school_sch_student($data);
    _school_sch_teacher($data);
    _school_sch_subject($data);
    _school_sch_class($data);
    return $data;
}
function _school_sch_student(&$data){
    $data['sch_student']['table']['group']=t('Student');
    $data['sch_student']['table']['base']= array(
        'field'=>'student_id',
        'title'=>t('Students'),
        'help'=>t('help'),
        );
    
    
    $data['sch_student']['student_id'] = array(
        'title'=>'Student_Id',
        'help'=>t('Student_Id'),
        'field'=>array(
        'handler' => 'views_handler_field',
        'click sortable' => TRUE,
     ),
       'filter' => array(
      'handler' => 'views_handler_filter'
    ),
    'sort' => array(
      'handler' => 'views_handler_sort'
    ),
    );
    $data['sch_student']['student_name'] = array(
        'title'=>'Student_Name',
        'help'=>t('Student_Name'),
        'field'=>array(
        'handler' => 'views_handler_field',
        'click sortable' => TRUE,
     ),
    );
    $data['sch_student']['student_email'] = array(
        'title'=>'Student_email',
        'help'=>t('Student_email'),
        'field'=>array(
        'handler' => 'views_handler_field',
        
     ),
    );
  
    $data['sch_student']['student_dob'] = array(
        'title'=>'Student_dob',
        'help'=>t('Student_dob'),
        'field'=>array(
        'handler' => 'views_handler_field_date',
        
     ),
    );
    
}

function _school_sch_teacher(&$data){
    $data['sch_teacher']['table']['group']=t('Teacher');
    $data['sch_teacher']['table']['base']= array(
        'field'=>'teacher_id',
        'title'=>t('Teacher'),
        'help'=>t('help'),
        );
    
    
    $data['sch_teacher']['teacher_id'] = array(
        'title'=>'Teacher_Id',
        'help'=>t('Teacher_Id'),
        'field'=>array(
        'handler' => 'views_handler_field',
        'click sortable' => TRUE,
     ),
    );
    $data['sch_teacher']['teacher_name'] = array(
        'title'=>'Teacher_Name',
        'help'=>t('Teacher_Name'),
        'field'=>array(
        'handler' => 'views_handler_field',
        'click sortable' => TRUE,
     ),
    );
    $data['sch_teacher']['teacher_email'] = array(
        'title'=>'Teacher_email',
        'help'=>t('Teacher_email'),
        'field'=>array(
        'handler' => 'views_handler_field',
        
     ),
    );
  
    $data['sch_teacher']['teacher_dob'] = array(
        'title'=>'Teacher_dob',
        'help'=>t('Teacher_dob'),
        'field'=>array(
        'handler' => 'views_handler_field_date',
        
     ),
    );
    
}


function _school_sch_subject(&$data){
    $data['sch_subject']['table']['group']=t('Subject');
    $data['sch_subject']['table']['base']= array(
        'field'=>'subject_id',
        'title'=>t('Subject'),
        'help'=>t('help'),
        );
    
    
    $data['sch_subject']['subject_id'] = array(
        'title'=>'subject_Id',
        'help'=>t('subject_Id'),
        'field'=>array(
        'handler' => 'views_handler_field',
        'click sortable' => TRUE,
     ),
        'relationship' => array(
     'title' => t('Teacher'),
     'help' => t('Teacher'),
     'handler' => 'views_handler_relationship',
     'base' => 'Teacher',
     'base field' => 'teacher_id',
     'field' => 'teacher_id',
     'label' => t('Teacher'),
   ),
    );
    $data['sch_subject']['subject_name'] = array(
        'title'=>'Subject_Name',
        'help'=>t('Subject_Name'),
        'field'=>array(
        'handler' => 'views_handler_field',
        'click sortable' => TRUE,
     ),
    );
    
}

function _school_sch_class(&$data){
    $data['sch_class']['table']['group']=t('class');
    $data['sch_class']['table']['base']= array(
        'field'=>'class_id',
        'title'=>t('class'),
        'help'=>t('help'),
        );
    
    
    $data['sch_class']['class_id'] = array(
        'title'=>'class_Id',
        'help'=>t('class_Id'),
        'field'=>array(
        'handler' => 'views_handler_field',
        'click sortable' => TRUE,
     ),
    );
    $data['sch_class']['class_name'] = array(
        'title'=>'class_Name',
        'help'=>t('class_Name'),
        'field'=>array(
        'handler' => 'views_handler_field',
        'click sortable' => TRUE,
     ),
    );
}