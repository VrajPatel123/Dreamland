<?php
$id=$_REQUEST['row_id'];
	$cn=mysqli_connect('localhost','root','') or die('	not connected');
	mysqli_select_db($cn,'final_project');
	mysqli_query($cn,"delete from agent where agent_id=$id");
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
                                <th>Agent Id</th>
                                <th>Agent Name</th>
								<th>Gender</th>
								<th>Dob</th>
								<th>Address</th>
								<th>City</th>
								<th>Mobile</th>
								<th>Email Id</th>
								<th>Password</th>
								<th>Agent Photo</th>
								<th>Comapany Name</th>
								<th>Company Logo</th>
								<th>Security Question</th>
								<th>Answer</th>
								
                            </tr>
                        </thead>
                        <tbody>
                         <?php
							$result=mysqli_query($cn,"select * from agent");
						 	while($r=mysqli_fetch_array($result))
							{
						 ?>
						 <tr>
							<td ><input type="button" name="b2" value="delete" onClick="agentdel('<?php echo $r[0];?>')"></td>
							<td> <?php echo $r[0]; ?> </td>
							<td> <?php echo $r[1]; ?> </td>
							<td> <?php echo $r[2]; ?> </td>
							<td> <?php echo $r[3]; ?> </td>
							<td> <?php echo $r[4]; ?> </td>
							<td> <?php echo $r[5]; ?> </td>
							<td> <?php echo $r[6]; ?> </td>
							<td> <?php echo $r[7]; ?> </td>
							<td> <?php echo $r[8]; ?> </td>
							<td> <?php echo $r[9]; ?> </td>
							<td> <?php echo $r[10]; ?> </td>
							<td> <?php echo $r[11]; ?> </td>
							<td> <?php echo $r[12]; ?> </td>
							<td> <?php echo $r[13]; ?> </td>
							
						 </tr>
						 <?php
						 
						 }
						 ?>
						 
                        </tbody>
                    </table>

				
</body>
</html>