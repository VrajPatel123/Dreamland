<?php
session_start();
$email=$_SESSION['email'];
	$cn=mysqli_connect('localhost','root','') or die('not connected');
	mysqli_select_db($cn,'final_project');
	
	$result=mysqli_query($cn,"select cat_id,cat_name from category ");
	$result1=mysqli_query($cn,"select area_id,area_name from area ");
	$result2=mysqli_query($cn,"select builder_id,builder_name from builder");
	$result3=mysqli_fetch_array(mysqli_query($cn,"select max(prop_id) from property_master"));
	$prop_id=$result3[0]+1;
	
	if(isset($_POST['b1']))
	{
		$cat_id=$_POST['cat'];
		$area_id=$_POST['area'];
		$builder_id=$_POST['builder'];
		$post_by=$_POST['post_by'];
		$pname=$_POST['pname'];
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
		
		
		
		
		mysqli_query($cn,"insert into property_master(cat_id,area_id,builder_id,post_by,email_id,prop_name) values ($cat_id,$area_id,$builder_id,'$post_by','$email','$pname') ");
		echo "insert into property_detail values ($prop_id,'$p1','$p2','$p3','$p4','$p5','$address',$price,$sqft,$bedrooms,$parking,$bathrooms,'$buildyear','$desc','$ac','$clubhouse','$cityview','$intercom',	'$internet','$laundryroom','$erange','$gas','$swimmingpool','$floorimage','$video','$locationimg',$floor)";
		echo "inserted";	
	}
?>


<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Real estate</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../../app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../../app-assets/images/ico/favicon-32.png">
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
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    			<div class="card-body collapse in">
					<div class="card-block">

										<form class="form" method="post" name="f1" action="" enctype="multipart/form-data">
										<div class="row">
								<div class="col-md-6 offset-md-3">
								
										<div class="form-group">
									<label>Category Name</label>
									<label id="projectinput7" class="file center-block">
									<select name="cat">
									<option value="">----select category name---</option>
									
									<?php
									while($r=mysqli_fetch_array($result))
									{
									
									?>
									<option value="<?php echo $r[0];?>"> <?php echo $r[1]; ?></option>
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
									<option value="<?php echo $r[0];?>"> <?php echo $r[1]; ?></option>
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
									<option value="<?php echo $r[0];?>"> <?php echo $r[1]; ?></option>
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
												<option value="ADMIN">ADMIN</option>
												<option value="AGENT">AGENT</option>
								
										  </select>
										</div>
									</div>
							</div>
							
							
	
							<div class="form-body">
										<div class="form-group">
											<label for="eventInput1">property name</label>
											<input type="text" id="price" class="form-control" placeholder="Enter property name" name="pname">
							</div>
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
												<option value="1">2</option>
												<option value="3">3</option>
												<option value="4">4</option>	
										  </select>
										</div>
									</div>
							</div>
						
								<div class="form-group">
									<label>Parking</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="parking" class="custom-control-input" value="yes">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Yes</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="parking" checked class="custom-control-input" value="no">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">No</span>
										</label>
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
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2019 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
