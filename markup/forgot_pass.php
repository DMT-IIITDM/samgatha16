<?php 
	require 'connection.php';
	$var1 = $_GET['suse'];
	$var2 = $_GET['fconf'];
	$retval = mysql_query("select forgot_pass_code from student_detail where email = '$var1'");
	if(!$retval) {
      die('Could not query'.mysql_error());
    }
	$row = mysql_fetch_row($retval);
	if(empty($row)) {
      echo "Email is not registered<br>";
    }
    $check_var = md5($row[0]);
    if ($check_var==$var2) {
        header("Loaction:http://localhost/change_pass.php?use='$var1'");
    }
    else {
        die('Email not registered<br>');
    }
 ?>