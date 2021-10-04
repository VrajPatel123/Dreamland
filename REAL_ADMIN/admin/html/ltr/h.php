<?php
	$cn=mysqli_connect('localhost','root','') or die('not connected');
	mysqli_select_db($cn,'final_project');
	
	
	if(isset($_POST['b1']))
	{
		$name=$_POST['agentname'];
		$gender=$_POST['r1'];
		$dob=$_POST['dob'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		$aphoto=$_FILES['aphoto']['name'];
		$cname=$_POST['cname'];
		$clogo=$_FILES['clogo']['name'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
		echo "	insert into agent (agent_name,gender,dob,address,city,mobile,email_id,password,agent_photo,comany_name,comapny_logo,security_question,answer)values('$name','$gender','$dob','$address','$city',$phone,'$email','$pwd','$aphoto','$cname','$clogo','$question','$answer')";
		mysqli_query($cn,"insert into agent (agent_name,gender,dob,address,city,mobile,email_id,password,agent_photo,comany_name,comapny_logo,security_question,answer)values('$name','$gender','$dob','$address','$city',$phone,'$email','$pwd','$aphoto','$cname','$clogo','$question','$answer')");
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
									<div class="form-body">
										<div class="form-group">
											<label for="eventInput1">Agent Name</label>
											<input type="text" id="agentname" class="form-control" placeholder="Enter agent Name" name="agentname">
										</div>
										<div class="form-group">
									<label>Gender</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="r1" class="custom-control-input">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Male</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="r1" checked class="custom-control-input">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Female</span>
										</label>
									</div>
								</div>
							
							<div class="form-group">
									<label for="timesheetinput3">Date of Birth</label>
									<div class="position-relative has-icon-left">
										<input type="date" id="timesheetinput3" class="form-control" name="dob">
										<div class="form-control-position">
											<i class="icon-calendar5"></i>
										</div>
									</div>
								</div>
									<div class="form-group">
									<label for="projectinput4">Address</label>
									<textarea id="projectinput4" rows="5" class="form-control" name="address" placeholder="Address"></textarea>
								</div>
							</div>
							

						<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label for="projectinput5">City</label>
											<select id="projectinput5" name="city" class="form-control">
												<option value="none" selected="" disabled="">City</option>
												<option value="design">surat</option>
												<option value="development">development</option>
												<option value="illustration">illustration</option>
												<option value="branding">branding</option>
												<option value="video">video</option>
										  </select>
										</div>
									</div>
							</div>
															<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<label for="projectinput6">Mobile Number</label>
											<input type="text" id="projectinput6" class="form-control" placeholder="Phone" name="phone">
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<label for="projectinput7">E-mail</label>
											<input type="text" id="projectinput7" class="form-control" placeholder="E-mail" name="email">
										</div>
									</div>
									</div>
									
									<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<label for="projectinput7">Password</label>
											<input type="text" id="projectinput7" class="form-control" placeholder="Password" name="pwd">
										</div>
									</div>
									</div>
									
							
								
							<div class="form-group">
									<label>Agent Photo</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file" name="aphoto">
										<span class="file-custom"></span>
									</label>
								</div>

							
								<div class="form-group">
									<label for="eventRegInput3">Company Name</label>
									<input type="text" id="eventRegInput3" class="form-control" placeholder="company name" name="cname">
								</div>

								
								<div class="form-group">
									<label>Company Logo</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file" name="clogo">
										<span class="file-custom"></span>
									</label>
								</div>

								
							<strong><div class="form-group">
									<label for="issueinput6">Security Question</label>
									<select id="issueinput6" name="question" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status">
										<option value="not started">Not Started</option>
										<option value="started">Started</option>
										<option value="fixed">Fixed</option>
									</select>
								</div>
</strong>

							<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<label for="projectinput7">Answer</label>
											<input type="text" id="projectinput7" class="form-control" placeholder="Answer" name="answer">
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
  </body>
</html>
