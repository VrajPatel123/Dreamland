<?php
$id=$_REQUEST['row_id'];
	$cn=mysqli_connect('localhost','root','') or die('	not connected');
	mysqli_select_db($cn,'final_project');
	mysqli_query($cn,"delete from category where cat_id=$id");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table class="table">
                        <thead class="thead-inverse">
                            <tr>
								<th>Delete record</th>
                                <th>Category Id</th>
                                <th>Category Name</th>
                                <th>Category Type</th>

                            </tr>
                        </thead>
                        <tbody>
                         <?php
						 	$result=mysqli_query($cn,"select * from category");
						 	while($r=mysqli_fetch_array($result))
							{
						 ?>
						 <tr>
			<td ><input type="button" name="b2" value="delete" onClick="catdel('<?php echo $r[0];?>')"></td>
						 	<td> <?php echo $r[0]; ?> </td>
							<td> <?php echo $r[1]; ?> </td>
							<td> <?php echo $r[2]; ?> </td>
						 </tr>
						 <?php
						 
						 }
						 ?>
                        </tbody>
                    </table>
				
</body>
</html>
