<?php
session_start();
if($_SESSION['admin_uname']=='')
{
  header('location:admin_login.php');
}
else
{
    $uname=$_SESSION['admin_uname'];


$cn=mysqli_connect('localhost','root','') or die('  not connected');
  mysqli_select_db($cn,'final_project');
if(isset($_POST['b2']))
    {
        $checkbox=$_POST['check'];
        for($i=0;$i<count($checkbox);$i++)
        {
            $prop_id=$checkbox[$i];
            mysqli_query($cn,"DELETE FROM property_rent_detail WHERE prop_id='".$prop_id."'");    
        }
    }

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
  <?php
      require_once('adminsidemenu.php');
    ?>
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">PROPERTY</h2>
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
  
      


  <div class="row match-height" style="font-size: 17px">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="basic-layout-form-center">Delete Property</h4>
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
          <div class="card-block">
            <div class="card-block" id="propdel">
              <form name="f1" method="post" enctype="multipart-data" action="">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <td>
                                        <label>Select All</label>
                                        <label class="au-checkbox">
                                            <input type="checkbox" id="checkAl">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>
                                 
                <th>Property Id</th>
                <th>Category Id</th>
                <th>Area Id</th>
                <th>Builder Id</th>
                <th>Post By</th>            
                <th>Email Id</th>
                <th>Property Name</th>
                <th>Property Id</th>                              
                <th>Photo1</th>
                <th>Photo2</th>
                <th>Photo3</th>
                <th>Photo4</th>
                <th>Photo5</th>
                <th>Addres</th>   
                <th>Price</th>
                <th>Sqare foot</th>
                <th>Bedrooms</th>
                <th>Parking</th>
                <th>Bathrooms</th>
                <th>Build Year</th>
                <th>Description</th>
                <th>Air conditioning</th>
                <th>Club house</th>
                <th>City View</th>
                <th>Intercom</th>
                <th>Internet</th>
                <th>Laundry Room</th>
                <th>Electric Range</th>
                <th>Gas Pipeline</th>
                <th>Swimming pool</th>
                <th>FloorPlan Image</th>
                <th>Video</th>
                <th>Location Image</th>
                <th>Floor</th>
                
                
                                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=0;
                                    $result=mysqli_query($cn,"select * from property_master pm,property_rent_detail pd where pm.prop_id=pd.prop_id");
                                    while($r=mysqli_fetch_array($result))
                                    {
                                ?>
                                <tr>
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox" id="checkItem" value="<?php echo $r[0]; ?>" name="check[]">
                                           
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[0]; ?></lable>
                                    </td>
                                    <td>
                                        <label><?php echo $r[1]; ?></label>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[2]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[3]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[4]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[5]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[6]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[7]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[8]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[9]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[10]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[11]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[12]; ?></lable>
                                    </td>
                                    <td>
                                        <lable><?php echo $r[13]; ?></lable>
                                    </td>
                                    <td>
                                    <lable> <?php echo $r[14]; ?></lable>
                                     </td>
              <td>
              <lable> <?php echo $r[15]; ?> </lable>
            </td>
              <td>
                <lable> <?php echo $r[16]; ?> </lable>
              </td>
              <td>
                <lable> <?php echo $r[17]; ?></lable> 
              </td>
              <td>
                <lable> <?php echo $r[18]; ?> </lable>
              </td>
              <td>
                <lable> <?php echo $r[19]; ?></lable>
                 </td>
              <td>
                <lable> <?php echo $r[20]; ?></lable>
                 </td>
              <td>
                <lable> <?php echo $r[21]; ?> </lable>
              </td>
              <td>
                <lable> <?php echo $r[22]; ?> </lable>
              </td>
              <td>
                <lable> <?php echo $r[23]; ?> </lable>
              </td>
              <td>
                <lable> <?php echo $r[24]; ?> </lable>
              </td>
              <td>
                <lable> <?php echo $r[25]; ?></lable> 
              </td>
              <td>
                <lable> <?php echo $r[26]; ?> </lable>
              </td>
               <td><label><?php echo $r[27]; ?></label> </td>
              <td> <label><?php echo $r[28]; ?></label></td>
              <td> <label><?php echo $r[29]; ?> </label></td>
              <td><label> <?php echo $r[30]; ?> </label></td>
              <td> <label><?php echo $r[31]; ?> </label></td>
               <td><label> <?php echo $r[32]; ?> </label></td>
                <td> <label><?php echo $r[33]; ?></label> </td>
                </tr>
                                <?php
                                    }
                                ?>
                                <tr>
                                    <td>
                                        <input type="submit" class="btn btn-danger" name="b2" value="Delete" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </form>
  
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
        <script src="js/main.js"></script>

    <script>
        $("#checkAl").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>

  </body>
</html>
