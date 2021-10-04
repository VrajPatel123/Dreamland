<?php
session_start();
require_once 'dompdf/autoload.inc.php';


/* reference the Dompdf namespace */
use Dompdf\Dompdf;

if($_SESSION['email']=='')
{
    header('location:user_login.php');
}
else
{
$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');

$email_id=$_SESSION['email'];



if(isset($_POST['pdf']))
{
    
/* include autoloader */


/* instantiate and use the dompdf class */
$dompdf = new Dompdf();
$name="hiral";
$result=mysqli_query($cn,"select * from property_master pm,property_rent_detail pr,wish_list w,user_registration ur
where w.prop_id=pm.prop_id and pm.prop_id=pr.prop_id and w.email_id=ur.email_id and w.email_id='$email_id'
UNION
select * from property_master pm,property_detail pr,wish_list w,user_registration ur
where w.prop_id=pm.prop_id and pm.prop_id=pr.prop_id and w.email_id=ur.email_id and w.email_id='$email_id'");
            
$html  = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <h1>Property List</h1>
         <table class="table" border="1px">
            <tr>
                <th> Photo </th>
                <th> Name </th>
                <th> Price </th>
                <th> Sq. ft. </th>
                <th> Address </th>
                
                
            </tr>';
            while($r=mysqli_fetch_array($result))
            {
                $html .= '<tr>
                <td> <img src="img/bg-img/home/'. $r[8] .'"  height="200px" width="200px"></td>
                
                <td> '. $r[6] .' </td>
                <td> '. $r[14] .'</td>
                <td> '. $r[15] .' </td>
                <td> '. $r[13] .' </td>

            </tr>';                
            }

        
        $html .= '</table>';


$dompdf->loadHtml($html);


/* Render the HTML as PDF */
$dompdf->render();


/* Output the generated PDF to Browser */
$dompdf->stream();

}


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Dreamland | wishlist</title>

    <!-- Favicon  -->
    <link  rel="icon" href="img/core-img/Logo.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
<script type="text/javascript">
function wishdel(id)
{
    if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("wishdel").innerHTML = this.responseText;
             }
        };
        xmlhttp.open("GET","wish_ajax_del.php?wish_id="+id,true);
        xmlhttp.send();
}

</script>
  
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        
        <?php
        require_once "header.php";
        ?>

    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/home/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Wishlist</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <br>

    <div id="wishdel">
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

     <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <form method="post" action="" name="f1">
                        <center> <input  type="submit" name="pdf" value="Download Pdf" class="align-items-center" /></center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    </div>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
       
       <?php
        require_once "footer.php";
        ?>

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


</body>

</html>