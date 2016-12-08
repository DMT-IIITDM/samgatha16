<?php 
	require 'connection.php';
	$var1 = $_GET['suse'];
	$var2 = $_GET['acconf'];
	$retval = mysql_query("select acc_confirm_code from student_detail where email = '$var1'");
	if(!$retval) {
      die('Could not query'.mysql_error());
    }
	$row = mysql_fetch_row($retval);
	if(empty($row)) {
      echo "Email is not registered<br>";
    }
    $check_var = md5($row[0]);
    if($check_var==$var2) {
    	$retval = mysql_query("update student_detail set confirm_bit=1 where email = '$var1'");
    	echo "Account Activation Successful";
    	header('Location: http://localhost/erf.php');
    }


 ?>