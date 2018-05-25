<?php
require 'config.php';
//  if(isset(_POST['submit'])){
    /*$fname = $_POST['firstname'];
    $sname = $_POST['secondname'];
    $email = $_POST['email'];
    $phone = $_POST['contact'];
    $password = $_POST['pword']; */
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    $db = "drupaldb";
    $db_connect = mysqli_select_db($db_handle, $db);
    if($db_connect){
      $sql = "INSERT INTO registration_data(first_name, second_name, email, contact_num, password) VALUES ('Chethan', 'H', 'chethan@gmail.com', '98', 'c')";
      $result = mysqli_query($db_handle, $sql);
      mysqli_close($db_handle);
      echo "You are successfully registered";
 //   }
  }
  else
    echo "DB not found";
?>