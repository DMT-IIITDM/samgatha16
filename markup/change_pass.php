<!DOCTYPE html>
<?php 
	require 'connection.php';
	$var = $_GET['use'];
	if(isset($_POST['enthu_pass'])&&(isset($_POST['enthu_c_pass']))) {
		$var1 = $_POST['enthu_pass'];
		$var2 = $_POST['enthu_c_pass'];
		if ($var2!=$var1) {
			die('Both the passwords should be same<br>');
		}
		$var1=md5($var1);
		echo $var1;
		$query = "update student_detail set password = '$var1' where email='$var'";
		$retval = mysql_query($query);
		if(!$retval) {
			die('Could not query'.mysql_error());
		}
		$query = "update student_detail set updated_at = now() where email='$var'";
		$retval = mysql_query($query);
		if(!$retval) {
			die('Could not query updated_at'.mysql_error());
		}
		$va1 = rand(0,getrandmax());
        $va2 = rand(0,getrandmax());
        $va3 = $v1.$v2;
        $query = "update student_detail set forgot_pass_code = '$va3' where email='$var'";
		//header('Location: http://localhost/login.php');
	}
 ?>

<html>
<head>
	<title>Change password</title>
</head>
<body>
<form method="POST">
	<label for="enthu_pass">Password : </label>
    <input type="text" name="enthu_pass" id="enthu_pass"> <br>
    <label for="enthu_c_pass">Confirm Password : </label>
    <input type="text" name="enthu_c_pass" id="enthu_c_pass"> <br>
    <button type="submit" name="change_pass">Change Passsword</button> <br>
</form>
</body>
</html>