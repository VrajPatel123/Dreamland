<?php
session_start();
$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');
$prop_id=$_REQUEST['prop_id'];
$email_id=$_SESSION['email'];
//$agent_id=$_REQUEST['agent_id'];

$date=date("Y-m-d");
//echo "insert into wish_list(email_id,prop_id,date) values ('$email_id',$prop_id,'$date')";
mysqli_query($cn,"insert into wish_list(email_id,prop_id,date) values ('$email_id',$prop_id,'$date')");
mysqli_query($cn,"insert into notification (email,prop_id,status) values ('$email_id',$prop_id,'pending')");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
