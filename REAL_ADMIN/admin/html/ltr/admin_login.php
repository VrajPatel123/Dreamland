<?php
session_start();
$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');
$email = $pwd = '';
if(isset($_POST['b1']))
{
	$email=$_POST['email'];
	$pwd=$_POST['password'];
    $type=$_POST['type'];
    if($type=="admin")
    {
    $r=mysqli_fetch_array(mysqli_query($cn,"select count(*),uname,email_id from admin_login where email_id='$email' and password='$pwd'"));

    if($r[0]==1)
    {
    
        $_SESSION['admin_uname']=$r[1];
        $_SESSION['admin_email']=$r[1];
        $_SESSION['email']=$r[2];
        header('location:index.php');
    }
    }   
    elseif ($type == "agent")
    {
   $r=mysqli_fetch_array(mysqli_query($cn,"select count(*),agent_name,email_id,agent_id from agent where email_id='$email' and password='$pwd'"));

    if($r[0]==1)
    {
        $_SESSION['agent_id']=$r[3];
        $_SESSION['agentid']=$r[2];
        $_SESSION['agent_email']=$r[1];
        // $_SESSION['agent_login_email'] = $r[];
        header('location:index_agent.php');
    }
    }
    else
    {
    $r=mysqli_fetch_array(mysqli_query($cn,"select count(*),email_id  from user_registration where email_id='$email' and password='$pwd' "));
    $_SESSION['user']=$r[0];
    $_SESSION['password']=$r[1];
    if($r[0]==1)
    {
    
        $_SESSION['email']=$r[1];
        header('location:../../../../index.php');
    }
    else
    {
        echo "invalid";
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
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END Custom CSS-->
     
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
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page" background="../../app-assets/images/logo/login.jpg">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
	
	<div>
	</div>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
		
		<section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0" style="opacity:0.8;">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header no-border">
                <div class="card-title text-xs-center">
                    <div class="p-1"><img src="../../app-assets/images/logo/dream1.jpg" height="100" width="300" alt="dream logo" ></div>
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span style="color:black;">Login</span></h6>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <form class="form-horizontal form-simple" action="" novalidate method="post">
                        <fieldset class="form-group position-relative has-icon-left mb-0">
                            <input type="text" class="form-control form-control-lg input-lg" required pattern="^\S+@\S+\.\S+$" title="example@mail.com" id="email" name="email"placeholder="Enter Email" class="form-control" required="required" / >
                            <div class="form-control-position">
                                <i class="icon-head"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control form-control-lg input-lg" id="password" name="password" placeholder="Enter Password" required>
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                        </fieldset>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                 <select id="select" name="type" class="form-control" required title="Enter Type">
                                              
                                                <option value="admin" selected="selected">ADMIN</option>
                                                <option value="agent">AGENT</option>
                                                <option value="user">USER</option>
                                
                                          </select>
                                        </div>
                                    </div>
                                    </div>
                            
                        <fieldset class="form-group row">
                            <div class="col-md-12 col-xs-12 text-xs-center text-md-left">
                                <fieldset>
                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                    <label for="remember-me" style="color:black;"> Remember Me</label>
                                </fieldset>
                            </div>
                           
                        </fieldset>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" name="b1" value="login" />
                        <a href="../../../../user_registration.php">If You Dont Any Account</a>


                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

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
