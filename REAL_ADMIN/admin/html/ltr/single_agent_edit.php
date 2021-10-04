<?php
session_start();
if($_SESSION['admin_uname']=='')
{
  header('location:admin_login.php');
}
else
{
    $uname=$_SESSION['admin_uname'];


$no=$_REQUEST['id'];
  $cn=mysqli_connect('localhost','root','') or die('not connected');
  mysqli_select_db($cn,'final_project');
  $r=mysqli_fetch_row(mysqli_query($cn,"select * from agent where agent_id=$no"));
  
if(isset($_POST['b1']))
  {

    
    $aphoto=$clogo='';
    $name=$_POST['agentname'];
    $gender=$_POST['r1'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    if($_FILES['p11']['name']=='')
    {
        $aphoto=$_POST['p12'];
    }
    else
    {
      $aphoto=$_FILES['p11']['name'];    
       
    }
    
    $cname=$_POST['cname'];
    
    if($_FILES['p21']['name']=='')
    {
    
        $clogo=$_POST['p22'];
    }
    else
    {
        $clogo=$_FILES['p21']['name'];    
    }
    $question=$_POST['question'];
    $answer=$_POST['answer'];

     
      mysqli_query($cn,"UPDATE agent set agent_name='$name',gender='$gender',dob='$dob',address='$address',city='$city',mobile=$phone,email_id='$email',password='$pwd',agent_photo='$aphoto',company_name='$cname',company_logo='$clogo',security_question='$question',answer='$answer' where agent_id=$no") or die("no");
    echo "updated";  
     header('location:single_agent_view.php');
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
    <style>
        textarea:focus, input:focus
        {
            outline: 0;
        }
        input:focus:invalid,textarea:focus:invalid
        {
            border:1px solid #F5192F;
            box-shadow:0 0 4px #F5192F;
        }
        input:focus:valid,textarea:focus:valid
        {
            border: 1px solid #64C364;
            box-shadow: 0 0 4px #64C364;
        }
    </style>
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>

            <li class="nav-item"><a href="index_agent.php" class="navbar-brand nav-link"><img alt="branding logo" src="../../app-assets/images/logo/Dreamland.png" data-expand="../../app-assets/images/logo/Dreamland.png" data-collapse="../../app-assets/images/logo/logo.png" height="50" width="auto" style="padding: 0px 0px 8px 10px;" class="brand-logo"></a></li>            
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
              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Margaret Govan</h6>
                          <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Bret Lezama</h6>
                          <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Carie Berra</h6>
                          <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Eric Alsobrook</h6>
                          <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../../app-assets/images/logo/vraj(1).jpg" alt="avatar" ><i></i></span><span class="user-name"><?php echo $uname; ?></span></a>
                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a><a href="#" class="dropdown-item"><i class="icon-mail6"></i> My Inbox</a><a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> Task</a><a href="#" class="dropdown-item"><i class="icon-calendar5"></i> Calender</a>
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
            <h2 class="content-header-title">AGENT</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>                </li>
                <li class="breadcrumb-item active"><a href="#">Basic Forms</a>                </li>
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
          <h4 class="card-title" id="basic-layout-form-center">Edit Agent</h4>
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

                    <form class="form" action=""  method="post">
              <div class="row">
                <div class="col-md-6 offset-md-3">
                
                <div class="form-body">
                    <div class="form-group">
                      <label for="eventInput1">Agent Id</label>
                      <input type="text" id="agentid" class="form-control" readonly="readonly" placeholder="Agent id" name="Agent id" value=<?php echo $r[0]; ?>>
                    </div>
                    </div>

                  <div class="form-body">
                    <div class="form-group">
                      <label for="eventInput1">Agent Name</label>
                      <input type="text" id="agentname" class="form-control" required title="Please enter name" pattern="[ A-za-z]*" placeholder="Enter agent Name" name="agentname" value=<?php echo $r[1]; ?>>
                    </div>

                    
                    <div class="form-group">
                  <label>Gender</label>
                  <div class="input-group" >
                    <label class="display-inline-block custom-control custom-radio ml-1">
                      <input type="radio" name="r1" class="custom-control-input"  required="please select"  value="male"  <?php if($r[2]=="male") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Male</span>
                    </label>
                    <label class="display-inline-block custom-control custom-radio">
                      <input type="radio" name="r1"  class="custom-control-input" required="please select" value="Female"  <?php if($r[2]=="Female") { ?>checked="checked"<?php } ?> />
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description ml-0">Female</span>
                    </label>
                  </div>
                </div>
              
              <div class="form-group">
                  <label for="timesheetinput3">Date of Birth</label>
                  <div class="position-relative has-icon-left">
                    <input type="date" id="timesheetinput3" class="form-control" required title="enter valid date" name="dob" value=<?php echo $r[3]; ?>>
                    <div class="form-control-position">
                      <i class="icon-calendar5"></i>
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="projectinput4">Address</label>
                  <textarea id="projectinput4" rows="5" class="form-control" required title="Enter  Address" pattern="[a-zA-Z0-9 ,-]*" name="address" placeholder="Address"> <?php echo $r[4];?></textarea>
                </div>
              </div>
               

            <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="projectinput5">City</label>
                      <select id="projectinput5" name="city" required title="enter city" class="form-control">
                        <option value="" selected="" disabled="">City</option>
                        <option value="surat" <?php if($r[5]=="surat") { ?> selected="selected"<?php
                      } ?>>surat</option>
                        <option value="baroda" <?php if($r[5]=="baroda") { ?> selected="selected"<?php } ?>>baroda</option>
                        <option value="mumbai" <?php if($r[5]=="mumbai") { ?> selected="selected"<?php
                      } ?>>mumbai</option>
                        <option value="vapi" <?php if($r[5]=="vapi") { ?> selected="selected"<?php
                      } ?>> vapi</option>
                       
                        </select>
                    </div>
                  </div>
              </div>
                              <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <label for="projectinput6">Mobile Number</label>
                      <input type="text" id="projectinput6" class="form-control" required minlength="10" maxlength="10" pattern="[0-9]*" title="Enter  Mobile Number" placeholder="Phone" name="phone" value=<?php echo $r[6]; ?>>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <label for="projectinput7">E-mail</label>
                      <input type="text" id="projectinput7" class="form-control"  required pattern="^\S+@\S+\.\S+$" title="example@mail.com" placeholder="E-mail" name="email" value=<?php echo $r[7]; ?>>
                    </div>
                  </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <label for="projectinput7">Password</label>
                      <input type="password" id="projectinput7" class="form-control" required="password" placeholder="Password" name="pwd" value=<?php echo $r[8]; ?>>
                    </div>
                  </div>
                  </div>
                  
              
          
                
              <div class="form-group">
                  <label>Agent Photo</label>
                  <label id="projectinput7" class="file center-block" >
                    <input type="file" id="file" name="p11" required title="Select Agent Photo">
                     <input type="text" id="file" name="p12"  value="<?php echo $r[9]; ?>" >
                    <span class="file-custom"></span>
                  </label>
                </div>

              
                <div class="form-group">  
                  <label for="eventRegInput3">Company Name</label>
                  <input type="text" id="eventRegInput3" class="form-control" required title="Please enter name" pattern="[ .A-za-z]*"  placeholder="company name" name="cname" value="<?php echo $r[10]; ?>">
                </div>

                
                <div class="form-group">
                  <label>Company Logo</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file" name="p21" required title="Select company logo">
                     <input type="text" id="file" name="p22"  value="<?php echo $r[11]; ?>" >
                    <span class="file-custom"></span>
                  </label>
                </div>

                <strong><div class="form-group">
                  <label for="issueinput6">Security Question</label>
                  <select id="issueinput6" name="question" class="form-control" required title="select question" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status">
                    <option value="">Security Question</option>
                      
                    <option value="nick name" <?php if($r[12]=="nick name") { ?> selected="selected"<?php
                      } ?>>Nick name</option>
                      
                  </select>
                </div>
</strong>

              <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <label for="projectinput7">Answer</label>
                      <input type="text" id="projectinput7" class="form-control" required title="Please enter name" pattern="[A-za-z]*" placeholder="Answer" name="answer" value="<?php echo $r[13]; ?>">
                    </div>
                  </div>
                  </div>      


              <div class="form-actions center">
                <button type="submit" class="btn btn-primary" name="b1">
                  <i class="icon-check2"></i> Save
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
