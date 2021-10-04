<?php
session_start();
$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');
$id=$_REQUEST['no'];
$result=mysqli_fetch_array(mysqli_query($cn,"select *
from property_master pm,area a, category c,builder b,property_rent_detail pr
where pm.prop_id=pr.prop_id and a.area_id=pm.area_id and c.cat_id=pm.cat_id and b.builder_id=pm.builder_id and cat_name='flat'  and pm.prop_id=$id
union 
select *
from property_master pm,area a, category c,builder b,property_detail pr
where pm.prop_id=pr.prop_id and a.area_id=pm.area_id and c.cat_id=pm.cat_id and b.builder_id=pm.builder_id and cat_name='flat'  and pm.prop_id=$id"));
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

        <!-- Top Header Area -->
                <!-- TOP BAR -->
        

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="img/bg-img/home/dreamland.png" height="200" width="200" alt=""></a>

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
                                 
                                
                                <li><a href="#">Properties</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Rent</a>
                                            <ul class="dropdown">
                                                 <li><a href="rent_property.php?type=rent">HOUSE</a></li>
                                                <li><a href="land.php?type=rent">Land</a></li>
                                                  <li><a href="villa.php?type=rent">Villa</a></li>
                                                  <li><a href="flat.php?type=rent">FLAT</a></li>
                                            </ul>
                                        </li>
                                         
                                        <li><a href="#">Buy/Sale</a>
                                            <ul class="dropdown">
                                               <li><a href="rent_property.php?type=buy">HOUSE</a></li>
                                                <li><a href="land.php?type=buy">Land</a></li>
                                                  <li><a href="villa.php?type=buy">Villa</a></li>
                                                  <li><a href="flat.php?type=buy">FLAT</a></li>
                                            </ul>
                                        </li>
                                        
                                 
                                    </ul>
                                </li>
                              
                                <li><a href="Builder.php">Builder</a></li>
                               <li><a href="Agent.php">Agent</a></li>
                                <li><a href="adv.php">Advertisemnt</a></li>
                                <li><a href="contact.php">Contact</a></li>
                           
                              <li><a href="">My Account</a>
                                        <ul class="dropdown">    
                                             <li><a href="feedback.php">Feedback</a></li>
                                            <li><a href="wishlist.php">WISHLIST</a></li>
                                            <li><a href="user_logout.php">Log Out</a></li>
                                        </ul>
                                </li>
                                 </ul>

                            <!-- Search Form -->
                            
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/home/hero1.jpg);">
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
                                        <select class="form-control" id="cities">
                                            <option>All Builders</option>
                                            <option>Riga</option>
                                            <option>Melbourne</option>
                                            <option>Vienna</option>
                                            <option>Vancouver</option>
                                            <option>Toronto</option>
                                            <option>Calgary</option>
                                            <option>Adelaide</option>
                                            <option>Perth</option>
                                            <option>Auckland</option>
                                            <option>Helsinki</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="catagories">
                                            <option>All Catagory</option>
                                            <option>Apartment</option>
                                            <option>Bar</option>
                                            <option>Farm</option>
                                            <option>House</option>
                                            <option>Store</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="offers">
                                            <option>All Area</option>
                                            <option>100% OFF</option>
                                            <option>75% OFF</option>
                                            <option>50% OFF</option>
                                            <option>25% OFF</option>
                                            <option>10% OFF</option>
                                        </select>
                                    </div>
                                </div>

                                

                                
                                    <!-- Distance Range -->
                                    

                                <div class="col-12 search-form-second-steps">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="types">
                                                    <option>Bathrooms</option>
                                                    <option>Apartment <span>(30)</span></option>
                                                    <option>Land <span>(69)</span></option>
                                                    <option>Villas <span>(103)</span></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="catagories2">
                                                    <option>Bedrooms</option>
                                                    <option>Apartment</option>
                                                    <option>Bar</option>
                                                    <option>Farm</option>
                                                    <option>House</option>
                                                    <option>Store</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions">
                                                    <option>All Actions</option>
                                                    <option>Sales</option>
                                                    <option>Booking</option>
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
                                        <button type="submit" class="btn south-btn">Search</button>
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
                            <p>
                                <i class="fa fa-inr"><?php echo $result[27]; ?></i>
                            </p>
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
                                <span><?php echo $result[29]; ?></span>
                            </div>
                            <div class="garage">
                                <img src="img/icons/garage.png" alt="">
                                <span><?php echo $result[30]; ?></span>
                            </div>
                            <div class="space">
                                <img src="img/icons/space.png" alt="">
                                <span><?php echo $result[28]; ?> sq ft</span>
                            </div>
                        </div>
                        <!-- Core Features -->
                        <ul class="listings-core-features d-flex align-items-center">
                          <li>
                                <i <?php if ($result[34]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?>aria-hidden="true"></i> 
                                Air Condition
                            </li>
                            <li>
                                <i <?php if ($result[35]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?>aria-hidden="true"></i> 
                                Clubhouse
                            </li>
                            <li>
                                <i <?php if ($result[36]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> 
                                Cityview
                            </li>
                            <li>
                                <i <?php if ($result[37]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> 
                                Intercom
                            </li>
                            <li>
                                <i <?php if ($result[38]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> 
                                Internet
                            </li>
                            <li>
                                <i <?php if ($result[39]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> 
                                Laundry Room
                            </li>
                            <li>
                                <i <?php if ($result[40]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> 
                                Electric Range
                            </li>
                            <li>
                                <i <?php if ($result[41]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> 
                                Gaspipeline
                            </li>
                            <li>
                                <i <?php if ($result[42]=="yes") { ?> class="fa fa-check" <?php } else { ?>class="fa fa-close" <?php } ?> aria-hidden="true"></i> 
                                Swimming Pool
                            </li>
                        </ul>
                        <!-- Listings Btn Groups -->
                        <div class="listings-btn-groups">
                            <a href="#" class="btn south-btn">See Floor plans</a>
                            <a href="#" class="btn south-btn active">calculate mortgage</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact-realtor-wrapper">
                        <div class="realtor-info">
                            <img src="img/bg-img/home/<?php echo $result[18]; ?>" alt="">
                            <div class="realtor---info">
                                <h2><?php echo $result[13]; ?></h2>
                                <p>Realtor</p>
                                <h6><img src="img/icons/phone-call.png" alt=""> <?php echo $result[17]; ?></h6>
                                <h6><img src="img/icons/envelope.png" alt=""> <?php echo $result[16 ]; ?></h6>
                            </div>
                            <div class="realtor--contact-form">
                                
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