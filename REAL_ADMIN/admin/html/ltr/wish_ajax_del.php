<?php
session_start();
$id=$_REQUEST['wish_id'];
$email=$_SESSION['email_id'];
	$cn=mysqli_connect('localhost','root','') or die('not connected');
	mysqli_select_db($cn,'final_project');
	mysqli_query($cn,"delete from wish_list where prop_id=30 and email_id='hiral@gmail.com'");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<div>
  
				
</body>
</html>