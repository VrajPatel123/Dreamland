
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
    <title>Dreamland | Contact</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/Logo.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function wishlist(id)

        {
        //alert(id);
            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("").innerHTML = this.responseText;
             }
        };
        xmlhttp.open("GET","add_wishlist.php?prop_id="+id,true);
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
                        <h3 class="breadcumb-title">Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br><br>
            <div class="container">
                     <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <video src="img/bg-img/home/j10.mp4" height="450px" width="500px" autoplay="" loop=""  ></video>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <p>When you register on the Sites for the Service, we ask you to provide basic contact information such as your name, contact number, email address and whether you are an individual or an agent etc. In addition the Agents are required to give other information like ex- Agent Firm Name, Office Address, Office Locality, Locality he deals in, his RERA registration number, projects he is dealing in, firm start date etc. When you register using your other accounts like Facebook, Twitter, Gmail etc. we shall retrieve Information from such account to continue to interact with you and to continue providing the Services. 
                                </p>
                                <p>When you choose any subscription or paid service provided as part of our Services, we or our payment gateway provider may collect your purchase, address or billing information, including your credit card number and expiration date etc. However, when you order using an in-app purchase option on any of the applications of the Company, same are handled by such mobile operating system platform providers. </p>
                            </div>
                    </div>
                </div><br>


                    <div class="col-md-12 padd-top">
                        <div class="spe-title">
                            <h3 style="text-align: center;color: #c03;">Find us here <span></span></h3><hr />
                        </div>
                    </div>

                    <div class="col-md-12">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.780330954715!2d72.80095511493488!3d21.161138585926746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dfd439d55ab%3A0xf1c151673619b5c9!2sBread+Liner+Cir%2C+New+City+Light%2C+Althan%2C+Surat%2C+Gujarat+395007!5e0!3m2!1sen!2sin!4v1554637842864!5m2!1sen!2sin" width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <br>
                <div class="row">
                    <div class="col-md-12 map">
                        <div class="spe-title">
                            <h3 style="text-align: center;color: #c03;">Get in touch <span></span><hr></h3>
                            
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-12">
                        <section class="tourb2-ab-p-41 com-colo-abou">
                            <div class="container-fluid">
                                <div class="row tourb2-ab-p4">
                                    <div class="col-md-6 col-sm-6" style="border: solid;">
                                        <div>

                                            <i class="fa fa-map-marker"></i> <b style="color:red;">Address</b>
                                            <p>Breadliner Circle, City Light Road, Surat</p>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6" style="border: solid;">
                                        <div>

                                            <i class="fa fa-envelope"></i> <b style="color:red;">Email</b>
                                            <p>dreamland@gmail.com</p>
                                            
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-sm-6" style="border: solid;padding-top: 10px;!">
                                        <div>

                                            <i class="fa fa-phone"></i> <b style="color:red;">Toll Free</b>
                                            <p>1800-233-233</p>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6" style="border: solid;">
                                        <div>

                                            <i class="fa fa-phone"></i> <b style="color:red;">Our Branch</b>
                                            <p>Ghod Dod Rd, Athwa, Surat</p>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <br><br>
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