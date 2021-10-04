<?php
session_start();

if($_SESSION['admin_uname']=='')
{
    header('location:admin_login.php');
}

else
{
$uname=$_SESSION['admin_uname'];

  $cn=mysqli_connect('localhost','root','') or die('not connected');
  mysqli_select_db($cn,'final_project');
  
  $r=mysqli_fetch_array(mysqli_query($cn,"select count(*) from category"));
  $r1=mysqli_fetch_array(mysqli_query($cn,"select count(*) from agent"));
  $r2=mysqli_fetch_array(mysqli_query($cn,"select count(*) from builder"));
  $r3=mysqli_fetch_array(mysqli_query($cn,"select count(*) from property_master"));
  $r4=mysqli_fetch_array(mysqli_query($cn,"select count(*) from user_registration"));
  $r5=mysqli_fetch_array(mysqli_query($cn,"select count(*) from mail"));
  $r6=mysqli_fetch_array(mysqli_query($cn,"select count(*) from advertisement"));

}	
?>

<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dreamland</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../../app-assets/images/ico/Logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../app-assets/images/ico/Logo.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../app-assets/images/ico/Logo.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../app-assets/images/ico/Logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/Logo.png">
    <link rel="shortcut icon" type="image/png" href="../../app-assets/images/ico/Logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END Custom CSS-->
    <script type="text/javascript">
      function notification(id)
      {
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
        xmlhttp.open("GET","noti.php?id="+id,true);
        xmlhttp.send();
      }
    </script>
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>

            <li class="nav-item"><a href="index.php" class="navbar-brand nav-link"><img alt="branding logo" src="../../app-assets/images/logo/Dreamland.png" data-expand="../../app-assets/images/logo/Dreamland.png" data-collapse="../../app-assets/images/logo/logo.png" height="50" width="auto" style="padding: 0px 0px 8px 10px;" class="brand-logo"></a></li>

            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
		
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
             
              
            </ul>
            <ul class="nav navbar-nav float-xs-right">
              <?php 
                    $res11=mysqli_fetch_array(mysqli_query($cn,"select count(*) from notification where status='pending'"));
                   ?>
              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up"><?php echo $res11[0]; ?></span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0"><?php echo $res11[0]; ?> New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                  
                    <?php 
                    $result11=mysqli_query($cn,"select * from notification n,property_master p where status='pending' and n.prop_id=p.prop_id");
                    while($re=mysqli_fetch_array($result11))
                    {
                    ?>
                    <a href="" onclick="notification(<?php echo $re[0]; ?>)">
                    <div class="media">
                        <div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          
                          <h6 class="media-heading"><?php echo $re[1]; ?></h6>
                          <p class="notification-text font-small-3 text-muted">Intrested in property <?php echo $re[10]; ?></p><small></small>

                            </div>
                      </div>
                      </a><a href="javascript:void(0)" class="list-group-item">
                    </a>
                    <?php
                    }
                    ?>
                      
                    </li>  
                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
                </ul>
              </li>
              
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../../app-assets/images/logo/vraj(1).jpg" alt="avatar" ><i></i></span><span class="user-name"><?php echo $uname; ?></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-divider"></div><a href="logout.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    
		<?php
			require_once('adminsidemenu.php');
		?>
	
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- stats -->
<div class="row">
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="pink"><?php echo $r[0]; ?></h3>
                            <span>CATEGORY</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-tags pink font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="teal"><?php echo $r1[0]; ?></h3>
                            <span>AGENTS</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-user1 teal font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="deep-orange"><?php echo $r2[0]; ?></h3>
                            <span>BUILDERS</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-diagram deep-orange font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="cyan"><?php echo $r3[0]; ?></h3>
                            <span>PROPERTYS</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-home4 cyan font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ stats -->
<!--/ project charts -->

<!--/ project charts -->
<!-- Recent invoice with Statistics -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-deep-orange media-left media-middle">
                        <i class="icon-user1 font-large-2 white"></i>
                    </div>
                    <div class="p-2 media-body">
                        <h5 class="deep-orange">New Users</h5>
                        <h5 class="text-bold-400"><?php echo $r4[0]; ?></h5>
                        <progress class="progress progress-sm progress-deep-orange mt-1 mb-0" value="45" max="100"></progress>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-cyan media-left media-middle">
                        <i class="icon-camera7 font-large-2 white"></i>
                    </div>
                    <div class="p-2 media-body">
                        <h5>New Products</h5>
                        <h5 class="text-bold-400">28</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="teal"><?php echo $r5[0]; ?></h3>
                            <span>Mail</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-user1 teal font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
<!-- Recent invoice with Statistics -->
<div class="row"> 
    <div class="col-xl-4 col-md-12 col-sm-12">
        <div class="card" style="height: 44 0px;">
            <div class="card-body">
                <div class="card-block">
                    <h4 class="card-title">ADMIN</h4>
                    <h6 class="card-subtitle text-muted"></h6>
                </div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <img src="../../app-assets/images/carousel/vraj.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item active">
                            <img src="../../app-assets/images/carousel/vraj.jpg" alt="Second slide">
                       </div>
                        
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-block">
                    <p class="card-text"><b>You are not buying a home…you are buying a lifestyle.</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block" style="text-align: center;">Copyright  &copy; 2021 DREAMLAND, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block"> <i class=""></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="../../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
