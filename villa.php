<?php
session_start();
$type=$_REQUEST['type'];
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
    <title> Dreamland</title>

    <!-- Favicon  -->
    <link  rel="icon" href="img/core-img/Logo.png">

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
                        <h3 class="breadcumb-title">Villa</h3>
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

    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            

            <div class="row">

                <!-- Single Featured Property -->
                                         <?php

                        if($type=='rent')
                                         {
                                            $result=mysqli_query($cn,"select *
from property_master pm,area a, category c,builder b,property_rent_detail pr
where pm.prop_id=pr.prop_id and a.area_id=pm.area_id and c.cat_id=pm.cat_id and b.builder_id=pm.builder_id and cat_name='farm' ");
                        
                                         }
                                         else
                                         {
                        $result=mysqli_query($cn,"select *
from property_master pm,area a, category c,builder b,property_detail pr
where pm.prop_id=pr.prop_id and a.area_id=pm.area_id and c.cat_id=pm.cat_id and b.builder_id=pm.builder_id and cat_name='farm' ");
                                            
                                         }
                        while($r=mysqli_fetch_array($result))
                        {
                        ?>

                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50">
                        <!-- Property Thumbnail -->
                   
                        <div class="property-thumb">
                             
                              <a href="single_villa.php?no=<?php echo $r[0]; ?>"> 
                            <img src="img/bg-img/home/<?php echo $r[21]; ?>"  alt="">

                            <div class="tag">
                                <span>For Rent</span>
                            </div>
                            <div class="list-price">
                                <p><i class="fa fa-inr"><?php echo $r[27]; ?></i></p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5><?php echo $r[6]; ?></h5>
                            <p class="location"><img src="img/icons/location.png" alt=""><?php echo $r[8]; ?></p>
                           
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="img/icons/bathtub.png" alt="">
                                    <span><?php echo $r[29]; ?></span>
                                </div>
                                <div class="garage">
                                    <img src="img/icons/garage.png" alt="">
                                    <span><?php echo $r[30]; ?></span>
                                </div>
                                <div class="space">
                                    <img src="img/icons/space.png" alt="">
                                    <span><?php echo $r[28]; ?> sq ft</span>
                                </div>
                                 </div><hr>
                            <div class="justify-content-center">  
                                <a href="wishlist.php" alt="">
                                <button class="btn btn-dark hover" name="b11" onclick="wishlist(<?php echo $r[0]; ?>)"> Add to Wishlist &nbsp;&nbsp; <i class="fa fa-heart"></i></button>
                                <button class="fa fa-phone btn btn-success" title="contact agent "></button>
                            </div>
                            </div>
                        </div>
                    </div>
                
                 <?php
                        }
                    ?>
                   
                    </div>
                <!-- Single Featured Property -->
               

            
        </div>
    </section>
    <!-- ##### Listing Content Wrapper Area End ##### -->

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