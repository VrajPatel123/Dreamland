<?php
session_start();

$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');
$builder_id=$cat=$bath=$bed=$type="";
if(isset($_POST['search']))
{

    $builder_id=$_POST['builder'];
    $cat=$_POST['category'];
    $area=$_POST['area'];
   $bath=$_POST['bathrooms'];
    $bed=$_POST['bedrooms'];
    $type=$_POST['type'];
     header('location:search.php?builder_id='.$builder_id."&cat_id=".$cat."&area_id=".$area."&bath=".$bath."&bed=".$bed."&type=".$type);

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
    <title>Dreamland | Home</title>

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
        <!-- new -->
        <?php
                include 'header.php';            
           
        ?>                            
              
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/home/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your home</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/home/hero2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your dream house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/home/hero3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your perfect house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                                           
            

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

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

    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Featured Properties</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Featured Property -->
                <?php 
                 $result=mysqli_query($cn,"select * FROM property_master pm,property_detail pd  where pd.prop_id=pm.prop_id
UNION
select * FROM property_master pm,property_rent_detail pd where pd.prop_id=pm.prop_id");
                        while($r=mysqli_fetch_array($result))
                        {
                        

?>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50">
                        <!-- Property Thumbnail -->
                   
                        <div class="property-thumb">
                            <div>
                                <img src="img\bg-img\home\<?php echo $r[8]; ?>" height="100" width="500" alt="">
                            </div>
                            <div class="tag">
                                <span>For Rent</span>
                            </div>
                            <div class="list-price">
                                <p><i class="fa fa-inr"><?php echo $r[14]; ?></i></p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5><?php echo $r[6]; ?></h5>
                            <p class="location">
                                <img src="img/icons/location.png"  alt=""><?php echo $r[13]; ?> </p>
                            
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="img/icons/bathtub.png" alt="">
                                    <span><?php echo $r[18]; ?></span>
                                </div>
                                <div class="garage">
                                    <img src="img/icons/garage.png" alt="">
                                    <span><?php echo $r[17]; ?></span>
                                </div>
                                <div class="space">
                                    <img src="img/icons/space.png" alt="">
                                    <span><?php echo $r[15]; ?> sq ft</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                 <?php
                        }
                    ?>
                   

              
            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(img/bg-img/home/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to rent?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Suspendisse dictum enim sit amet libero malesuada feugiat.</h6>
                        <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <section class="south-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2>Client testimonials</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Who knows if we can really put into words what it means to be home. We aren’t even going to try to articulate the feelings , but instead have the experts put it into words for us. These quotes about home will make your heart warm just thinking about the place you grew up or the place you come home to every night.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/home/jenil.jpg" alt="">
                                <p>JENIL PATEL, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Who knows if we can really put into words what it means to be home. We aren’t even going to try to articulate the feelings , but instead have the experts put it into words for us. These quotes about home will make your heart warm just thinking about the place you grew up or the place you come home to every night.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/home/hetvi.jpg" alt="">
                                <p>HETVI PATIL, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Who knows if we can really put into words what it means to be home. We aren’t even going to try to articulate the feelings , but instead have the experts put it into words for us. These quotes about home will make your heart warm just thinking about the place you grew up or the place you come home to every night.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/home/hetvi.jpg" alt="">
                                <p>HETVI PATIL <span>Customer</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Editor Area Start ##### -->
    
    <!-- ##### Editor Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/home/cta.jpg);">
        
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