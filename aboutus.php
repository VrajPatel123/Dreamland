<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Dreamland | About Us</title>

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
                        <h3 class="breadcumb-title">About us</h3>
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

    <!-- ##### About Content Wrapper Start ##### -->
    <section class="about-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>We search for the perfect home</h2>
                        <p>Stress has been a lot of free</p>
                    </div>
                    <div class="about-content">
                        <img class="wow fadeInUp" data-wow-delay="350ms" src="img/bg-img/home/feature2.jpg" alt="">
                        <p class="wow fadeInUp" data-wow-delay="450ms">Who knows if we can really put into words what it means to be home. We aren’t even going to try to articulate the feelings , but instead have the experts put it into words for us. These quotes about home will make your heart warm just thinking about the place you grew up or the place you come home to every night.</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>Featured Properties</h2>
                        <p>Stress has been a lot of free</p>
                    </div>

                    <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">

                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/home/fa13.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p><i class="fa fa-inr">7000 </i></p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Villa in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Hazira rod, Adajan</p>
                                
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>3</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>200 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/home/fa10.jpg" alt="">

                                <div class="tag">
                                    <span>For Rent</span>
                                </div>
                                <div class="list-price">
                                    <p><i class="fa fa-inr">4000 </i></p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">VIP Chokdi,Vesu</p>
                                <p>In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>4</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>1</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>600 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/home/fa6.jpg" alt="">

                                <div class="tag">
                                    <span>For Rent</span>
                                </div>
                                <div class="list-price">
                                    <p><i class="fa fa-inr">9000 </i></p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Villa in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Ring road, Sahara Darwaja</p>
                                <p> Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. </p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>3</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>900 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/home/cta.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p><i class="fa fa-inr">5000 </i></p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Pal road,Adajan</p>
                                <p>Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>3</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>1</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>700 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Content Wrapper End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
	
	
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(img/bg-img/home/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to rent?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Stress has been a lot of free</h6>
                        <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
		
    </section>
	
	<section>
	<br><br><br>
	 <div class="row">
                <!-- ##### Icon Boxes ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <center><h2>Icon boxes</h2></center>
                    </div>
                </div>

                <!-- Single Service Area -->
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="service-content">
                          <br>  <h5><img class="mr-15" src="img/icons/home3.png" alt=""> Perfect Home for me</h5>
                            <p>I love coming back home and seeing old friends and family. I would say it keeps me grounded.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="service-content">
                            <h5><img class="mr-15" src="img/icons/rent.png" alt=""> Perfect Home for Rent</h5>
                            <p>Service is the rent that you pay for room on this earth.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100">
                        <div class="service-content">
                            <h5><img class="mr-15" src="img/icons/flat.png" alt=""> Perfect Flat for me</h5>
                            <p>Where we love is home - home that our feet may leave, but not our hearts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Meet The Team Area Start ##### -->
   
    <!-- ##### Meet The Team Area End ##### -->

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