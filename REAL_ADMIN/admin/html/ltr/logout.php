<?php
session_start();
$_SESSION['admin_uname']='';
$_SESSION['agent_email']='';
header('location:admin_login.php');
?>