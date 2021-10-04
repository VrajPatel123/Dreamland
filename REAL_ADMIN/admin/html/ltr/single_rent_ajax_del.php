<?php
$id=$_REQUEST['row_id'];
	$cn=mysqli_connect('localhost','root','') or die('	not connected');
	mysqli_select_db($cn,'final_project');
	mysqli_query($cn,"delete from property_rent_detail where prop_id=$id");
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
                <th>Property Id</th>
                <th>Category Id</th>
                <th>Area Id</th>
                <th>Builder Id</th>
                <th>Post By</th>            
                <th>Email Id</th>
                <th>Property Name</th>
                <th>Property Id</th>                              
                <th>Photo1</th>
                <th>Photo2</th>
                <th>Photo3</th>
                <th>Photo4</th>
                <th>Photo5</th>
                <th>Addres</th>   
                <th>Price</th>
                <th>Sqare foot</th>
                <th>Bedrooms</th>
                <th>Parking</th>
                <th>Bathrooms</th>
                <th>Build Year</th>
                <th>Description</th>
                <th>Air conditioning</th>
                <th>Club house</th>
                <th>City View</th>
                <th>Intercom</th>
                <th>Internet</th>
                <th>Laundry Room</th>
                <th>Electric Range</th>
                <th>Gas Pipeline</th>
                <th>Swimming pool</th>
                <th>FloorPlan Image</th>
                <th>Video</th>
                <th>Location Image</th>
                <th>Floor</th>
                
                            </tr>
                        </thead>
                        <tbody>
                         <?php
              $result=mysqli_query($cn,"select * from property_rent_detail");
              while($r=mysqli_fetch_array($result))
              {
             ?>
             <tr>
      <td ><input type="button" name="b2" value="delete" onClick="propdel('<?php echo $r[0];?>')"></td>
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
              <td> <?php echo $r[14]; ?> </td>
              <td> <?php echo $r[15]; ?> </td>
              <td> <?php echo $r[16]; ?> </td>
              <td> <?php echo $r[17]; ?> </td>
              <td> <?php echo $r[18]; ?> </td>
              <td> <?php echo $r[19]; ?> </td>
              <td> <?php echo $r[20]; ?> </td>
              <td> <?php echo $r[21]; ?> </td>
              <td> <?php echo $r[22]; ?> </td>
              <td> <?php echo $r[23]; ?> </td>
              <td> <?php echo $r[24]; ?> </td>
              <td> <?php echo $r[25]; ?> </td>
              <td> <?php echo $r[26]; ?> </td>
             </tr>
             <?php
             
             }
             ?>
                        </tbody>
                    </table>
                </body>
                </html>
                

