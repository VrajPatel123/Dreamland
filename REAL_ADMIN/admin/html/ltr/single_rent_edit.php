<?php
session_start();
if($_SESSION['agent_email']=='')
{
  header('location:admin_login.php');
}
else
{
    $uname=$_SESSION['agent_email'];
$no=$_REQUEST['id'];

$email=$_SESSION['email'];
  

  $cn=mysqli_connect('localhost','root','') or die('not connected');
  mysqli_select_db($cn,'final_project');
  $result=mysqli_query($cn,"select cat_id,cat_name from category ");
  $result1=mysqli_query($cn,"select area_id,area_name from area ");
  $result2=mysqli_query($cn,"select builder_id,builder_name from builder");
  
 
$result3=mysqli_fetch_array(mysqli_query($cn,"select * from property_master pm ,property_rent_detail pd where pm.prop_id=pd.prop_id and pm.prop_id=$no"));
  
  if(isset($_POST['b1']))
  {
    $p1 = $p2 = $p3 = $p4 = $p5 = '';
    $cat_id=$_POST['cat'];
    $area_id=$_POST['area'];
    $builder_id=$_POST['builder'];
    $post_by=$_POST['post_by'];
    $pname=$_POST['pname'];
    
    if($_FILES['p1']['name']=='')
    {
        $p1=$_POST['pp1'];
    }
    else
    {
        $p1=$_FILES['p1']['name'];    
    }
    if($_FILES['p2']['name']=='')
    {
        $p1=$_POST['pp2'];
    }
    else
    {
        $p2=$_FILES['p2']['name'];
    }
    if($_FILES['p3']['name']=='')
    {
        $p1=$_POST['pp3'];
    }
    else
    {
        $p3=$_FILES['p3']['name'];
    }
    if($_FILES['p4']['name']=='')
    {
        $p4=$_POST['pp4'];
    }
    else
    {
       $p4=$_FILES['p4']['name'];
    }
    if($_FILES['p5']['name']=='')
    {
        $p4=$_POST['pp5'];
    }
    else
    {
        $p5=$_FILES['p5']['name'];
    }
    $address=$_POST['address'];
    $rent=$_POST['rent'];
    $sqft=$_POST['sqft'];
    $bedrooms=$_POST['bedrooms'];
    $parking=$_POST['parking'];
    $bathrooms=$_POST['bathrooms'];
    $buildyear=$_POST['buildyear'];
    $description=$_POST['description'];
    $ac=$_POST['ac'];
    $clubhouse=$_POST['clubhouse'];
    $cityview=$_POST['cityview'];
    $intercom=$_POST['intercom'];
    $internet=$_POST['internet'];
    $laundryroom=$_POST['laundryroom'];
    $erange=$_POST['erange'];
    $gas=$_POST['gas'];
    $swimmingpool=$_POST['swimmingpool'];
    $pname=$_POST['pname'];
    
    if($_FILES['floorimage']['name']=='')
    {
        $floorimage=$_POST['pp6'];
    }
    else
    {
       $floorimage=$_FILES['floorimage']['name'];  
    }
    
    if($_FILES['video']['name']=='')
    {
        $video=$_POST['pp7'];
    }
    else
    {
       $video=$_FILES['video']['name'];;
    }
    
    if($_FILES['locationimg']['name']=='')
    {
        $locationimg=$_POST['pp8'];
    }
    else
    {
       $locationimg=$_FILES['locationimg']['name'];
    }
    
    
    $floor=$_POST['floor'];
    
    
   
    mysqli_query($cn,"UPDATE property_master set  cat_id=$cat_id,area_id=$area_id,builder_id=$builder_id,post_by='$post_by',email_id='$email',prop_name='$pname' where prop_id=$no");
    mysqli_query($cn,"UPDATE property_rent_detail set photo1='$p1',photo2='$p2',photo3='$p3',photo4='$p4',photo5='$p5',address='$address',rent=$rent,sqare_foot=$sqft,bedrooms=$bedrooms,parking=$parking,bathrooms=$bathrooms,build_year='$buildyear',description='$description',air_condition='$ac',clubhouse='$clubhouse',cityview='$cityview',intercom='$intercom', internet='$internet',laundry_room='$laundryroom',electric_range='$erange',gaspipeline='$gas',swimming_pool='$swimmingpool',floorplanimage='$floorimage',video='$video',location_image='$locationimg',floor=$floor where prop_id=$no");

    echo "updated";  
     header('location:single_rent_view.php');
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
      <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
     
      <!-- / main menu header-->
      <!-- main menu content-->
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
          <h4 class="card-title" id="basic-layout-form-center">Insert Property</h4>
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

         <form class="form" method="post" name="f1" action="" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 offset-md-3">
                
                <div class="form-body">
                    <div class="form-group">
                      <label for="eventInput1">property ID</label>
                      <input type="text" id="id" class="form-control" placeholder="Enter property name" name="prop_id" value="<?php echo $result3[0]; ?>" />
              </div>
            </div>

                      <div class="form-group">
                  <label>Category Name</label>
                  <label id="projectinput7" class="file center-block">
                  <select name="cat">
                  <option value="">----select category name---</option>
                  
                  <?php
                  while($r=mysqli_fetch_array($result))
                  {
                  
                  ?>
                  <option value="<?php echo $r[0];?>" <?php if($r[0]==$result3[1]) { ?>selected="selected"<?php } ?>> <?php echo $r[1]; ?></option>
                  <?php
                  
                  
                  }
                  ?>
                  </select>
                    <span class="file-custom"></span>
                  </label>
                </div>
                
                <div class="form-group">
                  <label>Area Name</label>
                  <label id="projectinput7" class="file center-block">
                  <select name="area">
                  <option value="">----select area name---</option>
                  
                  <?php
                  while($r=mysqli_fetch_array($result1))
                  {
                  
                  ?>
                  <option value="<?php echo $r[0];?>" <?php if($r[0]==$result3[2]) { ?>selected="selected"<?php } ?>> <?php echo $r[1]; ?></option>
                  <?php
                  
                  
                  }
                  ?>
                  </select>
                    <span class="file-custom"></span>
                  </label>
                </div>
                
                <div class="form-group">
                  <label>Builder Name</label>
                  <label id="projectinput7" class="file center-block">
                  <select name="builder">
                  <option value="">----select builder name---</option>
                  
                  <?php
                  while($r=mysqli_fetch_array($result2))
                  {
                  
                  ?>
                  <option value="<?php echo $r[0];?>" <?php if($r[0]==$result3[3]) { ?>selected="selected"<?php } ?>> <?php echo $r[1]; ?></option>
                  <?php
                  
                  
                  }
                  ?>
                  </select>
                    <span class="file-custom"></span>
                  </label>
                </div>
                
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="projectinput5">post by</label>
                      <select id="projectinput5" name="post_by" class="form-control">
                        <option value="none" selected="" disabled=""> post by</option>
                        <option value="ADMIN" <?php if($result3[4]=="ADMIN") { ?>selected="selected"<?php } ?>>ADMIN</option>
                        <option value="AGENT" <?php if($result3[4]=="AGENT") { ?>selected="selected"<?php } ?>>AGENT</option>
                
                      </select>
                    </div>
                  </div>
              </div>
              
              
  
              <div class="form-body">
                    <div class="form-group">
                      <label for="eventInput1">property name</label>
                      <input type="text" id="price" class="form-control" placeholder="Enter property name" name="pname" value="<?php echo $result3[6]; ?>">
              </div>
              </div>
              
                        
                
                    <div class="form-group">
                  <label>Photo 1</label>
                  <label id="projectinput7" class="file center-block">
                  <input type="file" id="file" name="p1" >
                   <input type="hidden" id="file" name="pp1"  value="<?php echo $result3[8]; ?>">
                    <span class="file-custom"></span>
                  </label>
                    </div>
                
              <div class="form-group">
                  <label>Photo 2</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file" name="p2">
                    <input type="hidden" id="file" name="pp2"  value="<?php echo $result3[9]; ?>">
                    <span class="file-custom"></span>
                  </label>
                </div>
                
                <div class="form-group">
                  <label>Photo 3</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file" name="p3" >
                     <input type="hidden" id="file" name="pp3"  value="<?php echo $result3[10]; ?>">
                    <span class="file-custom"></span>
                  </label>
                </div>
                
                <div class="form-group">
                  <label>Photo 4</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file" name="p4" >
                     <input type="hidden" id="file" name="pp4"  value="<?php echo $result3[11]; ?>">
                    <span class="file-custom"></span>
                  </label>
                </div>
                
                <div class="form-group">
                  <label>Photo 5</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file" name="p5" >
                    <input type="hidden" id="file" name="pp5"  value="<?php echo $result3[12]; ?>">
                    <span class="file-custom"></span>
                  </label>
                </div>
                
                <div class="form-group">
                  <label for="projectinput4">Address</label>
                  <textarea id="projectinput4" rows="5" class="form-control" name="address" placeholder="Address"  value=""><?php echo $result3[13]; ?></textarea>
                </div>
              
              
              
              <div class="form-body">
                    <div class="form-group">
                      <label for="eventInput1">Rent</label>
                      <input type="text" id="price" class="form-control" placeholder="Enter Price" name="rent" value="<?php echo $result3[14]; ?>" />
              </div>
              </div>
              
              <div class="form-body">
                    <div class="form-group">
                      <label for="eventInput1">Sqare foot</label>
                      <input type="text" id="price" class="form-control" placeholder="Enter Sqare foot" name="sqft" value="<?php echo $result3[15]; ?>">
              </div>
              </div>
              
              <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="projectinput5">Bedrooms</label>
                      <select id="projectinput5" name="bedrooms" class="form-control">
                        <option value="none" selected="" disabled=""> bedrooms</option>
                        <option value="1" <?php if($result3[16]==1) { ?>selected="selected"<?php } ?>>1</option>
                        <option value="2" <?php if($result3[16]==2) { ?>selected="selected"<?php } ?>>2</option>
                        <option value="3" <?php if($result3[16]==3) { ?>selected="selected"<?php } ?>>3</option>
                        <option value="4" <?php if($result3[16]==4) { ?>selected="selected"<?php } ?>>4</option>  
                      </select>
                    </div>
                  </div>
              </div>
            
              <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="projectinput5">Parking</label>
                      <select id="projectinput5" name="parking" class="form-control">
                        <option value="none" selected="" disabled=""> parking</option>
                        <option value="1" <?php if($result3[17]==1) { ?>selected="selected"<?php } ?>>1</option>
                        <option value="2" <?php if($result3[17]==2) { ?>selected="selected"<?php } ?>>2</option>
                        <option value="3" <?php if($result3[17]==3) { ?>selected="selected"<?php } ?>>3</option>
                        <option value="4" <?php if($result3[17]==4) { ?>selected="selected"<?php } ?>>4</option>  
                      </select>
                    </div>
                  </div>
              </div>
              
              
              <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="projectinput5">Bathrooms</label>
                      <select id="projectinput5" name="bathrooms" class="form-control">
                        <option value="none" selected="" disabled=""> Bathrooms</option>
                        <option value="1" <?php if($result3[18]==1) { ?>selected="selected"<?php } ?>>1</option>
                        <option value="2" <?php if($result3[18]==2) { ?>selected="selected"<?php } ?>>2</option>
                        <option value="3" <?php if($result3[18]==3) { ?>selected="selected"<?php } ?>>3</option>  
                      </select>
                    </div>
                  </div>
              </div>
            
                <div class="form-group">
                  <label for="timesheetinput3">Build Year</label>
                  <div class="position-relative has-icon-left">
                    <input type="date" id="timesheetinput3" class="form-control" name="buildyear" value="<?php echo $result3[19]; ?>">
                    <div class="form-control-position">
                      <i class="icon-calendar5"></i>
                    </div>
                  </div>
                </div>
              
              <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="projectinput5">Description</label>
                      <select id="projectinput5" name="description" class="form-control">
                        <option value="none" selected="" disabled="">Description</option>
                        <option value="furnished" <?php if($result3[20]=="furnished") { ?>selected="selected"<?php } ?>>Furnished</option>
                        <option value="not furnished" <?php if($result3[20]=="not furnished") { ?>selected="selected"<?php } ?>>Not-Furnished</option>
                        <option value="semi furnished" <?php if($result3[20]=="semi furnished") { ?>selected="selected"<?php } ?>>Semi-Furnished</option>
                      </select>
                    </div>
                  </div>
              </div>
                
                
                <div class="form-group">
                  <label>Air Conditioning</label>
                  <div class="input-group">
                    <label class="display-inline-block custom-control custom-radio ml-1">
                    <input type="radio" name="ac" class="custom-control-input" value="yes" <?php if($result3[21]=="yes") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Yes</span>
                    </label>
                    <label class="display-inline-block custom-control custom-radio">
                    <input type="radio" name="ac"  class="custom-control-input" value="no" <?php if($result3[21]=="no") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">No</span>
                    </label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label>Club House</label>
                  <div class="input-group">
                    <label class="display-inline-block custom-control custom-radio ml-1">
                      <input type="radio" name="clubhouse" class="custom-control-input" value="yes"  <?php if($result3[22]=="yes") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Yes</span>
                    </label>
                    <label class="display-inline-block custom-control custom-radio">
                      <input type="radio" name="clubhouse"  class="custom-control-input" value="no" <?php if($result3[22]=="no") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">No</span>
                    </label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label>City View</label>
                  <div class="input-group">
                    <label class="display-inline-block custom-control custom-radio ml-1">
                      <input type="radio" name="cityview" class="custom-control-input" value="yes"  <?php if($result3[23]=="yes") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Yes</span>
                    </label>
                    <label class="display-inline-block custom-control custom-radio">
                      <input type="radio" name="cityview"  class="custom-control-input" value="no" <?php if($result3[23]=="no") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">No</span>
                    </label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label>Intercom</label>
                  <div class="input-group">
                    <label class="display-inline-block custom-control custom-radio ml-1">
                      <input type="radio" name="intercom" class="custom-control-input" value="yes"   <?php if($result3[24]=="yes") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Yes</span>
                    </label>
                    <label class="display-inline-block custom-control custom-radio">
                      <input type="radio" name="intercom"  class="custom-control-input" value="no" <?php if($result3[24]=="no") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">No</span>
                    </label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label>Internet</label>
                  <div class="input-group">
                    <label class="display-inline-block custom-control custom-radio ml-1">
                      <input type="radio" name="internet" class="custom-control-input" value="yes"  <?php if($result3[25]=="yes") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Yes</span>
                    </label>
                    <label class="display-inline-block custom-control custom-radio">
                      <input type="radio" name="internet"  class="custom-control-input" value="no" <?php if($result3[25]=="no") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">No</span>
                    </label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label>Laundry Room</label>
                  <div class="input-group">
                       <label class="display-inline-block custom-control custom-radio ml-1">
                      <input type="radio" name="laundryroom" class="custom-control-input" value="yes"  <?php if($result3[26]=="yes") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Yes</span>
                    </label>
                    <label class="display-inline-block custom-control custom-radio">
                      <input type="radio" name="laundryroom"  class="custom-control-input" value="no" <?php if($result3[26]=="no") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">No</span>
                    </label>
                </div>
                
                <div class="form-group">
                  <label>Electric Range</label>
                  <div class="input-group">
                    <label class="display-inline-block custom-control custom-radio ml-1">
                      <input type="radio" name="erange" class="custom-control-input" value="yes"  <?php if($result3[27]=="yes") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Yes</span>
                    </label>
                    <label class="display-inline-block custom-control custom-radio">
                      <input type="radio" name="erange"  class="custom-control-input" value="no" <?php if($result3[27]=="no") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">No</span>
                    </label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label>Gas pipe line</label>
                  <div class="input-group">
                    <label class="display-inline-block custom-control custom-radio ml-1">
                      <input type="radio" name="gas" class="custom-control-input" value="yes"  <?php if($result3[28]=="yes") { ?> checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Yes</span>
                    </label>
                    <label class="display-inline-block custom-control custom-radio">
                      <input type="radio" name="gas"  class="custom-control-input" value="no" <?php if($result3[28]=="no") { ?>  checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">No</span>
                    </label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label>Swimming Pool</label>
                  <div class="input-group">
                    <label class="display-inline-block custom-control custom-radio ml-1">
                      <input type="radio" name="swimmingpool" class="custom-control-input" value="yes"  <?php if($result3[29]=="yes") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Yes</span>
                    </label>
                    <label class="display-inline-block custom-control custom-radio">
                      <input type="radio" name="swimmingpool" class="custom-control-input" value="no" <?php if($result3[29]=="no") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">No</span>
                    </label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label>Floorplan Image</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file" name="floorimage">
                     <input type="hidden" id="file" name="pp6"  value="<?php echo $result3[30]; ?>" />
                    <span class="file-custom"></span>
                  </label>
                </div>
                
                
                <div class="form-group">
                  <label>video</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file"name="video">
                     <input type="hidden" id="file" name="pp7"  value="<?php echo $result3[31]; ?>" />
                    <span class="file-custom"></span>
                  </label>
                </div>
                
                
                <div class="form-group">
                  <label>Location Image</label>
                  <label id="projectinput7" class="file center-block">
                
                     <input type="file" id="file" name="locationimg" />
                     <input type="hidden" id="file" name="pp8"  value="<?php echo $result3[32]; ?>" />
                    <span class="file-custom"></span>
                  </label>
                </div>
                
                
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="projectinput5">floor</label>
                      <select id="projectinput5" name="floor" class="form-control">
                        <option value="none" selected="" disabled=""> floor</option>
                        <option value="1" <?php if($result3[33]==1) { ?>selected="selected"<?php } ?>>1</option>
                        <option value="2" <?php if($result3[33]==2) { ?>selected="selected"<?php } ?>>2</option>
                        <option value="3" <?php if($result3[33]==3) { ?>selected="selected"<?php } ?> <?php echo $result3[33]; ?>>3</option>
                      
                      </select>
                    </div>
                  </div>
              </div>
            
              
                
                


              <div class="form-actions center">
              <input type="submit" class="btn btn-primary" name="b1" value="Submit">
              </button>
                <button type="button" class="btn btn-warning mr-1">
                  <i class="icon-cross2"></i> Cancel
                </button>
                
              </div>
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
  </body>
</html>
