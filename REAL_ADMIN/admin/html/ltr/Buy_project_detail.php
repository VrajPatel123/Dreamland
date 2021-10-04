<?php
session_start();
$uname=$_SESSION['admin_uname'];
$email=$_SESSION['email'];
$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');
	$result=mysqli_query($cn,"select prop_id,prop_name from property_master");
	
	
	if(isset($_POST['b1']))
	{
		$prop_id=$_POST['pname'];
		$p1=$_FILES['p1']['name'];
		$p2=$_FILES['p2']['name'];
		$p3=$_FILES['p3']['name'];
		$p4=$_FILES['p4']['name'];
		$p5=$_FILES['p5']['name'];
		$address=$_POST['address'];
		$price=$_POST['price'];
		$sqft=$_POST['sqft'];
		$bedrooms=$_POST['bedrooms'];
		$parking=$_POST['parking'];
		$bathrooms=$_POST['bathrooms'];
		$buildyear=$_POST['buildyear'];
		$desc=$_POST['desc'];
		$ac=$_POST['ac'];
		$clubhouse=$_POST['clubhouse'];
		$cityview=$_POST['cityview'];
		$intercom=$_POST['intercom'];
		$internet=$_POST['internet'];
		$laundryroom=$_POST['laundryroom'];
		$erange=$_POST['erange'];
		$gas=$_POST['gas'];
		$swimmingpool=$_POST['swimmingpool'];
		$floorimage=$_FILES['floorimage']['name'];	
		$video=$_FILES['video']['name'];;
		$locationimg=$_FILES['locationimg']['name'];
		$floor=$_POST['floor'];
		
		
		
		
		mysqli_query($cn,"insert into property_sell_detail values ($prop_id,'$p1','$p2','$p3','$p4','$p5','$address',$price,$sqft,$bedrooms,$parking,$bathrooms,'$buildyear','$desc','$ac','$clubhouse','$cityview','$intercom',	'$internet','$laundryroom','$erange','$gas','$swimmingpool','$floorimage','$video','$locationimg',$floor)");
		echo "inserted";	
	}
?>


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
               <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">You have new order!</h6>
                          <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>                        </div>f                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading red darken-1">99% Server load</h6>
                          <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-server2 icon-bg-circle bg-yellow bg-darken-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                          <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-check2 icon-bg-circle bg-green bg-accent-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Complete the task</h6><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-bar-graph-2 icon-bg-circle bg-teal"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Generate monthly report</h6><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>                        </div>
                      </div></a></li>
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
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name"><?php echo $uname; ?></span></a>
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
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="index.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">HOME</span>                    </li>
          <li class=" nav-item"><a href="cateory_view.php"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Category</span></a>
            <ul class="menu-content">
              <li><a href="category_view.php" data-i18n="nav.page_layouts.1_column" class="menu-item">View all</a>              </li>
              <li><a href="category_insert.php" data-i18n="nav.page_layouts.2_columns" class="menu-item">Insert</a>              </li>
              <li><a href="category_edit.php" data-i18n="nav.page_layouts.boxed_layout" class="menu-item">Edit</a>              </li>
              <li><a href="category_delete.php" data-i18n="nav.page_layouts.static_layout" class="menu-item">Delete</a>              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="area_view.php"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">Area</span></a>
            <ul class="menu-content">
              <li><a href="area_view.php" data-i18n="nav.invoice.invoice_template" class="menu-item">View all</a>              </li>
              <li><a href="area_insert.php" data-i18n="nav.gallery_pages.gallery_grid" class="menu-item">Insert</a>              </li>
              <li><a href="area_edit.php" data-i18n="nav.search_pages.search_page" class="menu-item">Edit</a>              </li>
              <li><a href="area_delete.php" data-i18n="nav.search_pages.search_website" class="menu-item">Delete</a>              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="agent_view.php"><i class="fas fa-chalkboard-teachere"></i><span data-i18n="nav.cards.main" class="menu-title">Agent</span></a>
            <ul class="menu-content">
              <li><a href="agent_view.php" data-i18n="nav.cards.card_bootstrap" class="menu-item">View all</a>              </li>
              <li><a href="agent_insert.php" data-i18n="nav.cards.card_actions" class="menu-item">Insert</a>              </li>
              <li><a href="agent_edit.php" data-i18n="nav.cards.card_actions" class="menu-item">Edit</a>              </li>
              <li><a href="agent_delete.php" data-i18n="nav.cards.card_actions" class="menu-item">Delete</a>              </li>
		    </ul>
          </li>
          <li class=" nav-item"><a href="builder_view.php"><i class="icon-whatshot"></i><span data-i18n="nav.advance_cards.main" class="menu-title">Builder</span></a>
            <ul class="menu-content">
              <li><a href="builder_view.php" data-i18n="nav.cards.card_statistics" class="menu-item">View all</a>              </li>
              <li><a href="builder_insert.php" data-i18n="nav.cards.card_charts" class="menu-item">Insert</a>              </li>
			  <li><a href="builder_edit.php" data-i18n="nav.cards.card_charts" class="menu-item">Edit</a>              </li>
              <li><a href="builder_delete.php" data-i18n="nav.cards.card_charts" class="menu-item">Delete</a>              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="property_view.php"><i class="icon-compass3"></i><span data-i18n="nav.content.main" class="menu-title">Buy Property</span></a>
            <ul class="menu-content">
              <li><a href="property_view.php" data-i18n="nav.content.content_grid" class="menu-item">View all</a>              </li>
              <li><a href="property_insert.php" data-i18n="nav.content.content_typography" class="menu-item">Insert</a>              </li>
              <li><a href="property_edit.php" data-i18n="nav.content.content_text_utilities" class="menu-item">Edit</a>              </li>
              <li><a href="property_delete.php" data-i18n="nav.content.content_helper_classes" class="menu-item">Delete</a>              </li>
   		
   				 <li class=" nav-item"><a href="#"><i class="icon-grid2"></i><span data-i18n="nav.components.main" class="menu-title">Rent Property</span></a>
            <ul class="menu-content">
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">View all</a>
              </li>
              <li><a href="component-buttons-basic.html" data-i18n="nav.components.components_buttons.component_buttons_basic" class="menu-item">Insert</a>
              </li>
              <li><a href="component-carousel.html" data-i18n="nav.components.component_carousel" class="menu-item">Edit</a>
              </li>
              <li><a href="component-collapse.html" data-i18n="nav.components.component_collapse" class="menu-item">Delete</a>
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
								
												
									<div class="form-group">
									<label>Property Name</label>
									<label id="projectinput7" class="file center-block">
									<select name="pname">
									<option value="">----select Property name---</option>
									<?php
									while($r=mysqli_fetch_array($result))
									{
									
									?>
									<option value="<?php echo $r[0];?>"><?php echo $r[1];?> </option>
									<?php
									
									
									}
									?>
									</select>
										<span class="file-custom"></span>
									</label>
								</div>
								
								
										<div class="form-group">
									<label>Photo 1</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file" name="p1">
										<span class="file-custom"></span>
									</label>
								</div>
								
							<div class="form-group">
									<label>Photo 2</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file" name="p2">
										<span class="file-custom"></span>
									</label>
								</div>
								
								<div class="form-group">
									<label>Photo 3</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file" name="p3">
										<span class="file-custom"></span>
									</label>
								</div>
								
								<div class="form-group">
									<label>Photo 4</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file" name="p4">
										<span class="file-custom"></span>
									</label>
								</div>
								
								<div class="form-group">
									<label>Photo 5</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file" name="p5">
										<span class="file-custom"></span>
									</label>
								</div>
								
								<div class="form-group">
									<label for="projectinput4">Address</label>
									<textarea id="projectinput4" rows="5" class="form-control" name="address" placeholder="Address"></textarea>
								</div>
							
							
							
							<div class="form-body">
										<div class="form-group">
											<label for="eventInput1">Price</label>
											<input type="text" id="price" class="form-control" placeholder="Enter Price" name="price">
							</div>
							</div>
							
							<div class="form-body">
										<div class="form-group">
											<label for="eventInput1">Sqare foot</label>
											<input type="text" id="price" class="form-control" placeholder="Enter Sqare foot" name="sqft">
							</div>
							</div>
							
							<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label for="projectinput5">Bedrooms</label>
											<select id="projectinput5" name="bedrooms" class="form-control">
												<option value="none" selected="" disabled=""> bedrooms</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>	
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
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>	
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
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>	
										  </select>
										</div>
									</div>
							</div>
						
								<div class="form-group">
									<label for="timesheetinput3">Build Year</label>
									<div class="position-relative has-icon-left">
										<input type="date" id="timesheetinput3" class="form-control" name="buildyear">
										<div class="form-control-position">
											<i class="icon-calendar5"></i>
										</div>
									</div>
								</div>
							
							<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label for="projectinput5">Description</label>
											<select id="projectinput5" name="desc" class="form-control">
												<option value="none" selected="" disabled="">Description</option>
												<option value="furnished">Furnished</option>
												<option value="not furnished">Not-Furnished</option>
												<option value="semi furnished">Semi-Furnished</option>
										  </select>
										</div>
									</div>
							</div>
								
								
								<div class="form-group">
									<label>Air Conditioning</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="ac" class="custom-control-input" value="yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Yes</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="ac" checked class="custom-control-input" value="no">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">No</span>
										</label>
									</div>
								</div>
								
								<div class="form-group">
									<label>Club House</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="clubhouse" class="custom-control-input" value="yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Yes</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="clubhouse" checked class="custom-control-input" value="no">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">No</span>
										</label>
									</div>
								</div>
								
								<div class="form-group">
									<label>City View</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="cityview" class="custom-control-input" value="yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Yes</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="cityview" checked class="custom-control-input" value="no">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">No</span>
										</label>
									</div>
								</div>
								
								<div class="form-group">
									<label>Intercom</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="intercom" class="custom-control-input" value="yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Yes</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="intercom" checked class="custom-control-input" value="no">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">No</span>
										</label>
									</div>
								</div>
								
								<div class="form-group">
									<label>Internet</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="internet" class="custom-control-input" value="yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Yes</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="internet" checked class="custom-control-input" value="no">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">No</span>
										</label>
									</div>
								</div>
								
								<div class="form-group">
									<label>Laundry Room</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="laundryroom" class="custom-control-input" value="yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Yes</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="laundryroom" checked class="custom-control-input" value="no">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">No</span>
										</label>
									</div>
								</div>
								
								<div class="form-group">
									<label>Electric Range</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="erange" class="custom-control-input" value="yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Yes</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="erange" checked class="custom-control-input" value="no">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">No</span>
										</label>
									</div>
								</div>
								
								<div class="form-group">
									<label>Gas pipe line</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="gas" class="custom-control-input" value="yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Yes</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="gas" checked class="custom-control-input" value="no">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">No</span>
										</label>
									</div>
								</div>
								
								<div class="form-group">
									<label>Swimming Pool</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="swimmingpool" class="custom-control-input" value="yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Yes</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="swimmingpool" checked class="custom-control-input" value="no">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">No</span>
										</label>
									</div>
								</div>
								
								<div class="form-group">
									<label>Floorplan Image</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file" name="floorimage">
										<span class="file-custom"></span>
									</label>
								</div>
								
								
								<div class="form-group">
									<label>video</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file"name="video">
										<span class="file-custom"></span>
									</label>
								</div>
								
								
								<div class="form-group">
									<label>Location Image</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file" name="locationimg">
										<span class="file-custom"></span>
									</label>
								</div>
								
								
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label for="projectinput5">floor</label>
											<select id="projectinput5" name="floor" class="form-control">
												<option value="none" selected="" disabled=""> floor</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											
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
