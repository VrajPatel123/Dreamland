<?php
$id=$_REQUEST['id'];
  $cn=mysqli_connect('localhost','root','') or die('not connected');
  mysqli_select_db($cn,'final_project');
mysqli_query($cn,"update notification set status='read' where n_id=$id");
?>