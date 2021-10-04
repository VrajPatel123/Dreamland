<?php
	session_start();
$email_id=$_SESSION['email'];
	$id=$_REQUEST['wish_id'];
	$email=$_SESSION['email'];
	$cn=mysqli_connect('localhost','root','') or die('not connected');
	mysqli_select_db($cn,'final_project');
	mysqli_query($cn,"delete from wish_list where prop_id=$id and email_id='$email'");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	  <table class="table" border="2px" align="center" >
            <tr>
                <th> Photo </th>
                <th> Name </th>
                <th> Price </th>
                <th> Sq. ft. </th>
                <th>Address</th>
                <th> delete </th>
            </tr>
       
    <?php 
            $result=mysqli_query($cn,"select * from property_master pm,property_rent_detail pr,wish_list w,user_registration ur
where w.prop_id=pm.prop_id and pm.prop_id=pr.prop_id and w.email_id=ur.email_id and w.email_id='$email_id'
UNION
select * from property_master pm,property_detail pr,wish_list w,user_registration ur
where w.prop_id=pm.prop_id and pm.prop_id=pr.prop_id and w.email_id=ur.email_id and w.email_id='$email_id'");
            while($r=mysqli_fetch_array($result))
                        {

?>
                <tr>
                <td> <img src="img/bg-img/home/<?php echo $r[8]; ?>"  height="200px" width="200px"></p></td>
                <td> <?php echo $r[6]; ?> </td>
                <td> <i class="fa fa-inr"></i><?php echo $r[14];  ?></td>
                <td> <?php echo $r[15]; ?>sq ft </td>
                 <td> <?php echo $r[13]; ?>Address </td>
                   
                <td> <button class="btn btn-danger" style="align:center" name="b2" value="delete" onclick="wishdel('<?php echo $r[0]; ?>')"><i class="fa fa-trash" ></i> </button></td>

            </tr>


       
        <?php
    }
    ?>
     </table>

  
				
</body>
</html>