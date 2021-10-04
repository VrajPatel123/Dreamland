<?php
session_start();
$cn=mysql_connect('localhost','root','','final_project');

$id=$_REQUEST['no'];
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
    <title>South - Real Estate Agency Template | Listings Details</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
<script type="text/javascript">
    function intrested()
    {
        
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

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:contact@southtemplate.com">contact@southtemplate.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+45 677 8993000 223">+45 677 8993000 223</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                         <div class="classynav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                               <li><a href="about-us.html">About Us</a></li>
                               <li><a href="Builder.php">Builder</a></li>
                               <li><a href="Agent.php">Agent</a></li>
                              <!---  <li><a href="homeloan.php">HomeLoan</a></li>-->
                                <li><a href="#">Properties</a>
                                    <ul class="dropdown">
                                    
                                        
                                        <li><a href="#">Rent</a>
                                            <ul class="dropdown">
                                                <li><a href="rent_property.php">HOUSE</a></li>
                                                <li><a href="land.php">Land</a></li>
                                                  <li><a href="villa.php">Villa</a></li>
                                                  <li><a href="flat.php">FLAT</a></li>
                                            </ul>
                                        </li>
                                         
                                        <li><a href="#">Buy/Sale</a>
                                            <ul class="dropdown">
                                              <li><a href="rent_property.php">Home</a></li>
                                                 <li><a href="land.php">Land</a></li>
                                                  <li><a href="villa.php">Villa</a></li>
                                                  <li><a href="flat.php">FLAT</a></li>
                                            </ul>
                                        </li>
                                       
                                 
                                    </ul>
                                </li>
                                
                                
                                < <li><a href="blog.html">Blog</a></li>
                                <li><a href="#">Mega Menu</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Builder</li>

                                            <?php
                                            $result=mysqli_query($cn,"select * from builder");
                                            while ($r=mysqli_fetch_array($result))
                                             {
                                                # code...
                                            
                                            ?>
                                            <li><a href="single_builder.php?builder_id=<?php echo $r[0]; ?>"><?php echo $r[1]; ?></a></li>
                                            <?php
                                            }
                                        ?>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Agent</li>

                                            <?php
                                            $result=mysqli_query($cn,"select * from Agent");
                                            while ($r=mysqli_fetch_array($result))
                                             {
                                                # code...
                                            
                                            ?>
                                            <li><a href="agent_wiseproperty.php?agent_id=<?php echo $r[0]; ?>"><?php echo $r[1]; ?></a></li>
                                            <?php
                                            }
                                        ?> 
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Area</li>
                                            
                                    

                                            <?php
                                            $result=mysqli_query($cn,"select * from Area");
                                            while ($r=mysqli_fetch_array($result))
                                             {
                                                # code...
                                            
                                            ?>
                                            <li><a href="area_wiseproperty.php?area_id=<?php echo $r[0]; ?>"><?php echo $r[1]; ?></a></li>
                                            <?php
                                            }
                                        ?> 
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Rent Property</li>
                                            <li><a href="rent_property.php">Home</a></li>
                                            <li><a href="land.php">Land</a></li>
                                            <li><a href="villa.php">Villa</a></li>
                                            <li><a href="flat.php">Flat</a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                 
                            </ul>
                        </div>
                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>

    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Property</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search for your home</p>
                        </div>
                        <!-- Search Form -->
                        <form action="#" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="cities" name="builder">
                                            <option value="">All Builders</option>
                                            <?php
                                $result=mysqli_query($cn,"select * from builder");
                                while($r=mysqli_fetch_array($result))
                                {
                                ?>
                                          <option value="<?php echo $r[0]; ?>" ><?php echo $r[1]; ?></option>
                                
                                 <?php
                                }
                        ?>
                                      
                                         
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="catagories" name="category">
                                   <option value="">All Category</option>
                                            <?php
                                $result=mysqli_query($cn,"select * from category");
                                while($r=mysqli_fetch_array($result))
                                {
                                ?>
                                          <option value="<?php echo $r[0]; ?>" ><?php echo $r[1]; ?></option>
                                
                                 <?php
                                }
                                ?>      </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="offers" name="area">
                                   <option value="">All Area</option>
                                            <?php
                                $result=mysqli_query($cn,"select * from area");
                                while($r=mysqli_fetch_array($result))
                                {
                                ?>
                                          <option value="<?php echo $r[0]; ?>" ><?php echo $r[1]; ?></option>
                                
                                 <?php
                                }
                                ?>      </select>
                                    </div>
                                </div>

                                
                                
                                
                                <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex">
                                    <!-- Space Range -->
                                    <div class="slider-range">
                                       <!-- <div data-min="120" data-max="820" data-unit=" sq. ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="120" data-value-max="820">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">120 sq. ft - 820 sq. ft</div>-->
                                    </div>

                                    <!-- Distance Range -->
                                </div>

                                <div class="col-12 search-form-second-steps">
                                    <div class="row">
                                    <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms" name="bathrooms">
                                            <option value="">Bathrooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5+</option>
                                        </select>
                                    </div>
                                </div>

                                    <div class="form-group">
                                        <select class="form-control" id="bedrooms" name="bedrooms">
                                            <option value="">Bedrooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5+</option>
                                        </select>
                                    </div>   
                                       
                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions" name="type">
                                                    <option value="">All Actions</option>
                                                    <option value="sale">Sales</option>
                                                    <option value="rent">Rent</option>
                                                </select>
                                            </div>
                                        </div>

                                       
                                       
                                       
                                       
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#" id="moreFilter">+ More filters</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn" name="search" >Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Listings Content Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Single Listings Slides -->
                    <div class="single-listings-sliders owl-carousel">
                        <!-- Single Slide -->
                        <img src="img/bg-img/home/<?php echo $result[21]; ?>" alt="">
                        <img src="img/bg-img/home/<?php echo $result[22]; ?>" alt="">
                        <img src="img/bg-img/home/<?php echo $result[23]; ?>" alt="">
                        <img src="img/bg-img/home/<?php echo $result[24]; ?>" alt="">
                        <img src="img/bg-img/home/<?php echo $result[25]; ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="listings-content">
                        <!-- Price -->
                       
                             <div class="list-price">
                                <p><i class="fa fa-inr"><?php echo $result[27]; ?></i></p>
                            </div>
        
                        <h5><?php echo $result[6]; ?></h5>
                        <p class="location"><img src="img/icons/location.png" alt=""><?php echo $result[8]; ?></p>
                      
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end">
                            <div class="new-tag">
                                <img src="img/icons/new.png" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="img/icons/bathtub.png" alt="">
                                <span><?php echo $result[29]; ?> </span>
                            </div>
                            <div class="garage">
                                <img src="img/icons/garage.png" alt="">
                                <span><?php echo $result[30]; ?> </span>
                            </div>
                            <div class="space">
                                <img src="img/icons/space.png" alt="">
                                <span><?php echo $result[28]; ?> sq ft</span>
                            </div>
                        </div>
                        <!-- Core Features -->
                        <ul class="listings-core-features d-flex align-items-center">
                            <li><i <?php if ($result[34]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?>aria-hidden="true"></i> Air Condition</li>
                            <li><i <?php if ($result[35]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?>aria-hidden="true"></i> Clubhouse</li>
                            <li><i <?php if ($result[36]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> Cityview</li>
                            <li><i <?php if ($result[37]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> Intercom</li>
                            <li><i <?php if ($result[38]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> Internet</li>
                            <li><i <?php if ($result[39]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> Laundry Room</li>
                            <li><i <?php if ($result[40]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> Electric Range</li>
                            <li><i <?php if ($result[41]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> Gaspipeline</li>
                            <li><i <?php if ($result[42]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> Swimming Pool</li>

                        
                        </ul>
                        <!-- Listings Btn Groups -->
                        <div class="listings-btn-groups">
                            <a href="#" class="btn south-btn">See Floor plans
                            </a>
                            <a href="#" class="btn south-btn active">calculate mortgage</a></br>
                            <button class="btn south-btn" name="intresred" onclick="intresred">I am Intrested</button> 
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact-realtor-wrapper">
                        <div class="realtor-info">
                            <img src="img/bg-img/listing.jpg" alt="">
                            <div class="realtor---info">
                                <h2><?php echo $result[13]; ?></h2>
                                <p>Realtor</p>
                                <h6><img src="img/icons/phone-call.png" alt=""> +91 <?php echo $result[17]; ?></h6>
                                <h6><img src="img/icons/envelope.png" alt=""> <?php echo $result[16]; ?></h6>
                            </div>
                            <div class="realtor--contact-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="realtor-name" placeholder="Your Name" >
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="realtor-number" placeholder="Your Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="enumber" class="form-control" id="realtor-email" placeholder="Your Mail">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="realtor-message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn south-btn">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Listing Maps -->
            <div class="row">
                <div class="col-12">
                    <div class="listings-maps mt-100">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Listings Content Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>

                            <img src="img/bg-img/footer.jpg" alt="">
                            <div class="footer-logo my-4">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <p>Integer nec bibendum lacus. Suspen disse dictum enim sit amet libero males uada feugiat. Praesent malesuada.</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 19 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> office@template.com</h6>
                                <h6><img src="img/icons/location.png" alt=""> Main Str. no 45-46, b3, 56832, Los Angeles, CA</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Useful Links</h6>
                            </div>
                            <!-- Nav -->
                            <ul class="useful-links-nav d-flex align-items-center">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Listings</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Elements</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Featured Properties</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
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