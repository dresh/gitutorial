<!DOCTYPE html>
<html lang="en">
<head>
  <title>HTML table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./reg.js"></script>

<?php
require 'config.php';
  if(isset(_POST['submit'])){
    $fname = $_POST['firstname'];
    $sname = $_POST['secondname'];
    $email = $_POST['email'];
    $phone = $_POST['contact'];
    $password = $_POST['pword'];
    $db_handle = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    $db_connect = mysql_select_db($db_handle, "drupaldb");
    if($db_connect){
      $sql = "INSERT INTO registration_data('first_name', 'second_name', 'email', 'contact_num', 'password') VALUES ($fname, $sname, $email, $phone, $password)";
      $result = mysql_query($sql);
      mysql_close($db_handle);
      echo "You are successfully registered";
    }
  }
?>



</head>
<body bgcolor="rgba(0,0,0,.54)">
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-md-12" style="margin: 20px;"></div>
 	</div>
 	<div class="row">
 	<div class="col-md-4"></div>
 	<div class="col-md-4 well">
 		<h2>Registration</h2>
 		<!--<img src="/home/rajeshwari/Downloads/Chethan/HTML/reg.png" alt="human icon" align="middle" width="100px" height="100px" style=""><br/> -->
 		<form  method="post" onsubmit="reg()" name="regform">
 			<input type="text" name="firstname" placeholder="First Name" id="fname" required><span id="errfname" style="color: red;"></span><br><br>
            <input type="text" name="secondname" placeholder="Second Name"><span id="errsname" style="color: red;"></span><br><br>
            <input type="email" name="email" placeholder="E-mail" required><span id="erremail" style="color: red;"></span><br><br>
            <input type="tel" name="contact" placeholder="Contact Number" min="10" max="12" required><span id="errconnum" style="color: red;"></span><br><br>
            <input type="password" name="pword" placeholder="Password" id="pword" required><br><br>
            <input type="password" name="conpword" placeholder="Confirm Password" id="conpword" required><span id="errpword" style="color: red;"></span><br><br>
            <table class="table" style="width:150px;">
              <tr>
                <td class="success"><input type="submit" name="submit" value="Register" style="background-color: green; color: #fff;"> </td>
    			<td class="danger"><input type="reset" name="reset" value="Cancel" style="background-color: red; color: #fff;"> </td>
   			  </tr>
            </table>
 		</form>
 	</div>	
 	<div class="col-md-4"></div>
  </div>
 </div>
 <script type="text/javascript">
 	function reg(){
	/* var nameRegex = /^[a-zA-Z\-]+$/;
  	var name;
  	name = document.getElementById('fname').value;
  	alert("0");
  	if(name.match(nameRegex) == null){
  		var err = document.getElementById('errfname');
  		err.innerHTML = "Name should contains only alphabets.";
  		alert("1");
  		return false;
  	} */
  	var pword1 = document.getElementById('pword');
  	var conpword = document.getElementById('conpword');
  	if(pword.value != conpword.value){
  		// document.getElementById('errpword').innerHTML = "Does word doesn't match";
  		alert("Password doestnot match");
  		document.regform.pword.focus();
  		return false;
  	} 
}
 </script>
</body>
</html>