
<?php
$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');
$id=$_REQUEST['id'];

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
    <title>Dreamland</title>

    <!-- Favicon  -->
    <link  rel="icon" href="img/core-img/Logo.png">

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

        <!-- Top Header Area -->
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
                        <h3 class="breadcumb-title">
                            <?php
                            ?>
                            
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Contact info</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <?php

$res1=mysqli_fetch_array(mysqli_query($cn,"select agent_name,agent_photo,mobile,a.email_id FROM agent a,property_master pm WHERE a.email_id=pm.email_id and post_by='agent' and prop_id=$id
UNION
select builder_name,builder_photo,MOBILE,a.email_id FROM builder a,property_master pm WHERE pm.builder_id=a.builder_id and post_by='admin' and prop_id=$id"));


?>
                    <div class="content-sidebar">

                        <h6><img src="img/bg-img/home/<?php echo $res1[1]; ?>" alt=""></h6>
                        
                        <!-- Office Hours -->
                        
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="img/icons/" alt=""> <?php echo $res1[0]; ?></h6>
                            <h6><img src="img/icons/envelope.png" alt=""> <?php echo $res1[3]; ?></h6>
                            <h6><img src="img/icons/phone-call.png" alt=""> <?php echo $res1[2]; ?></h6>
                            
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="text" id="contact-name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="number" id="contact-number" placeholder="Your Phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="contact-email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn south-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="googleMap" class="googleMap"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
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
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>
