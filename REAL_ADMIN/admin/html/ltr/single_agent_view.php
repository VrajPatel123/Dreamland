<?php

session_start();
if($_SESSION['agent_email']=='')
{
  header('location:admin_login.php');
}
else
{
    $uname=$_SESSION['agent_email'];

$id=$_SESSION['agentid'];
$cn=mysqli_connect('localhost','root','') or die('  not connected');
  mysqli_select_db($cn,'final_project');
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

            <li class="nav-item"><a href="index_agent.php" class="navbar-brand nav-link"><img alt="branding logo" src="../../app-assets/images/logo/Dreamland.png" data-expand="../../app-assets/images/logo/Dreamland.png" data-collapse="../../app-assets/images/logo/logo.png" height="50" width="auto" style="padding: 0px 0px 8px 10px;" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
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
                          <p class="notification-text font-small-3 text-muted">Intrested in property <?php echo $re[10]; ?></p><small>

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
      <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      
      <!-- / main menu header-->
      <br><!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
         <li class=" nav-item"><a href="index_agent.php"><i class="icon-home4"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Home</span>
          </li></a>
          <li class=" nav-item"><a href="index_agent.php"><i class="icon-user-secret"></i><span data-i18n="nav.cards.main" class="menu-title">Agent</span></a>
            <ul class="menu-content">
              <li><a href="single_agent_view.php" data-i18n="nav.cards.card_bootstrap" class="menu-item"><i class="icon-eye"></i> View all</a>
              </li>
             
            </ul>
          </li>
           <li class=" nav-item"><a href="index_agent.php"><i class="icon-shopping-cart"></i><span data-i18n="nav.content.main" class="menu-title">Buy Property</span></a>
            <ul class="menu-content">
              <li><a href="single_property_view.php" data-i18n="nav.content.content_grid" class="menu-item"><i class="icon-eye"></i> View all</a>
              </li>
              <li><a href="single_property_insert.php" data-i18n="nav.content.content_typography" class="menu-item"><i class="icon-chevron-circle-right"></i> Insert</a>
              </li>
              <li><a href="single_property_delete.php" data-i18n="nav.content.content_helper_classes" class="menu-item"><i class="icon-trash-o"></i> Delete</a>
              </li>
            </ul>
      </li>
       <li class=" nav-item"><a href="index_agent.php"><i class="icon-money"></i><span data-i18n="nav.components.main" class="menu-title">Rent Property</span></a>
            <ul class="menu-content">
              <li><a href="single_rent_view.php" data-i18n="nav.components.component_alerts" class="menu-item"><i class="icon-eye"></i> View all</a>
              </li>
              <li><a href="single_rent_insert.php" data-i18n="nav.components.components_buttons.component_buttons_basic" class="menu-item"><i class="icon-chevron-circle-right"></i> Insert</a>
            </li>
              <li><a href="single_rent_delete.php" data-i18n="nav.components.component_collapse" class="menu-item"><i class="icon-trash-o"></i> Delete</a>
              </li>
       
       
            </ul>
          </li>
             <li class=" nav-item"><a href="index_agent.php"><i class="icon-mail"></i><span data-i18n="nav.components.main" class="menu-title">Mail</span></a>
            <ul class="menu-content">
              <li><a href="agent_mail.php" data-i18n="nav.components.component_alerts" class="menu-item"><i class="icon-eye"></i> View all</a>
              </li>
              <li><a href="single_agent_mail.php" data-i18n="nav.components.components_buttons.component_buttons_basic" class="menu-item"><i class="icon-chevron-circle-right"></i> Insert</a>
            </li>
          </ul>
           </li>
        
          
           

                           </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Agent</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
               
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
  
      


  <div class="row match-height">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="basic-layout-form-center">View Agent</h4>
          <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
              <li><a data-action="reload"><i class="icon-reload"></i></a></li>
              <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
              <li><a data-action="close"><i class="icon-cross2"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-body collapse in">
          <div class="card-block" id="agentdel">
   <h6>
        <table class="table">

                        <thead class="thead-inverse">
                            <tr>
               
                <th>Update record
                <th>Agent Id</th>
                <th>Agent Name</th>
                <th>Gender</th>
                <th>Dob</th>
                <th>Address</th>
                <th>City</th>
                <th>Mobile</th>
                <th>Email Id</th>
                <th>Password</th>
                <th>Agent Photo</th>
                <th>Comapany Name</th>
                <th>Company Logo</th>
                <th>Security Question</th>
                <th>Answer</th>
                
                            </tr>
                        </thead>
                        <tbody>
                         <?php

              $result=mysqli_query($cn,"select * from agent where email_id='$id'");
              while($r=mysqli_fetch_array($result))
              {
             ?>
             <tr>
              
                 <td ><a href="single_agent_edit.php?id=<?php echo $r[0]; ?>"><input type="button" name="b1" value="update" /></a></td>
              <td> <?php echo $r[0]; ?> </td>
              <td> <?php echo $r[1]; ?> </td>
              <td> <?php echo $r[2]; ?> </td>
              <td> <?php echo $r[3]; ?> </td>
              <td> <?php echo $r[4]; ?> </td>
              <td> <?php echo $r[5]; ?> </td>
              <td> <?php echo $r[6]; ?> </td>
              <td> <?php echo $r[7]; ?> </td>
              <td> <?php echo $r[8]; ?> </td>
              <td> <?php echo $r[9]; ?> </td>
              <td> <?php echo $r[10]; ?> </td>
              <td> <?php echo $r[11]; ?> </td>
              <td> <?php echo $r[12]; ?> </td>
              <td> <?php echo $r[13]; ?> </td>
              
             </tr>
             <?php
             
             }
             ?>
             
                        </tbody>
                    </table>

          </div>
        </div>
      </div>
    </div>
  </div>


  </div>
</section>
<!-- // Basic form layout section end -->
      </div>
  </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2021 DREAMLAND , All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block"></span></p>
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
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
