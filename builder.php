<?php
$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');
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
    <title>Dreamland | Builder</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/Logo.png">

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
        <section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>MEET THE BUILDER</h2>
                        
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <?php

                        $result=mysqli_query($cn,"select * from builder");
                        while($r=mysqli_fetch_array($result))
                        {
                        ?>
                    
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/bg-img/home/<?php echo $r[6]; ?>" alt="" height="500px" width="500px">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                
                                <h2><?php echo $r[1]; ?></h2>
                                
                            </div>
                            <div class="address">
                              <a href="single_builder.php?builder_id=<?php echo $r[0]; ?>" class="btn south-btn" >Read More</a>  
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    ?>
                <!-- Single Team Member -->
                
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
 