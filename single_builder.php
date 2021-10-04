<?php
session_start();
$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');
$id=$_REQUEST['builder_id'];
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
    <title>South - Real Estate Agency Template | Blog</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

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
                        <h3 class="breadcumb-title">BUILDER</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="south-blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                   
                    <!-- Single Blog Area -->
                    <?php

                        $r=mysqli_fetch_array(mysqli_query($cn,"select * from builder where builder_id=$id"));
                        ?>
                            <div class="single-blog-area mb-50">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="img/bg-img/<?php echo $r[3]; ?>" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Date -->
                            <!-- Headline -->
                               <table align="center" border="1" cellpadding="20px" cellspacing="20px"> 
                                <tr>
                                       <td style="width: 300px;text-align:center;"> <b>Builder name :</b></td>
                                       
                                       <td style="width: 400px;text-align:center;"> <?php echo $r[1];?></td>
                                </tr>
                                <tr>
                                       <td style="width: 300px;text-align:center;"> <b>Company name :</b></td>
                                       
                                       <td style="width: 400px;text-align:center;"> <?php echo $r[2];?></td>
                                </tr>
                                <tr>
                                       <td style="width: 300px;text-align:center;"> <b>Company Logo :</b></td>
                                       
                                       <td style="width: 400px;text-align:center;"> <img src="img/bg-img/home/<?php echo $r[3];?>" height="400px" width="300px" /></td>
                                </tr>
                                <tr>
                                       <td style="width: 300px;text-align:center;"> <b>Email ID : </b> </td>
                                       
                                       <td style="width: 400px;text-align:center;"> <?php echo $r[4];?></td>
                                </tr>
                                <tr>
                                       <td style="width: 300px;text-align:center;"> <b>Contact Number :</b></td>
                                    
                                       <td style="width: 400px;text-align:center;"> <?php echo $r[5];?></td>
                                </tr>
                                  <tr>
                                       <td style="width: 300px;text-align:center;"> <b>Office Address :</b></td>
                                       
                                       <td style="width: 400px;text-align:center;"> <?php echo $r[7];?></td>
                                </tr>
                             
                               </table> 

                             

                            <a href="#" class="headline"><?
                            </div>
                             
                        </div>
                    </div>
                   
                   
                    <!-- Single Blog Area -->
                   
                    <!-- Single Blog Area -->
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        
                        
                        <div class="row">
                <div class="col-12">                  
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

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