<?php

$cn=mysqli_connect('localhost','root','') or die('  not connected');
mysqli_select_db($cn,'final_project');
?>
 <section>
        <!-- TOP BAR -->
        <div style="background: black;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <ul style="margin-bottom: 0px;">
                                <li style="float: left;display: inline-block;"><a href="#" style=" color: white;padding: 5px 14px;line-height: 30px;border-right: 1px solid #e7ebef;font-size: 12px;"> <i class="fa fa-envelope"> </i> Email: dreamland@gmail.com</a>
                                </li>
                                <li style="float: left;display: inline-block;"><a href="#" style=" color: white;padding: 5px 14px;line-height: 30px;border-right: 1px solid #e7ebef;font-size: 12px;"><i class="fa fa-phone"></i> Toll Free : 1800 233 233</a>
                                </li>
                                <!-- <a href="user_registration.php">ragis</a> -->
                            </ul>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

<!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader" >
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav" >

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/bg-img/home/dreamland.png" height="200" width="200" alt=""></a>

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
                                <li><a href="aboutus.php">About Us</a></li>
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
                                        <li><a href="#">AreaWise</a>
                                            <ul class="dropdown">
                                              <li><a href="buysell.php">Buy/Sale</a></li>
                                                <li><a href="rentarea.php">Rent</a></li>
                                                 
                                            </ul>
                                        </li>
                                 
                                    </ul>
                                </li>
                               <li><a href="Builder.php">Builder</a></li>
                               <li><a href="Agent.php">Agent</a></li>
                                <li><a href="#">Mega Menu</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Builder</li>

                                            <?php
                                            $result=mysqli_query($cn,"select * from builder limit 5");
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
                                            $result=mysqli_query($cn,"select * from Agent limit 5");
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
                                            $result=mysqli_query($cn,"select * from Area limit 5");
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
</div>
</div>
          </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>