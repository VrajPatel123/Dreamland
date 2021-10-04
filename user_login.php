<?php
session_start();
/*echo"<pro>";
print_r($_SESSION);*/

$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');
$email = $pwd = '';
if(isset($_POST['b1']))
{
	$email=$_POST['email'];
	$pwd=$_POST['password'];
	$r=mysqli_fetch_array(mysqli_query($cn,"select count(*),email_id  from user_registration where email_id='$email' and password='$pwd' "));
	 $_SESSION['user']=$r[0];
	 $_SESSION['password']=$r[1];
	//  echo "<pre>";
	//  print_r($_SESSION);
	// die;
	if($r[0]==1)
	{
	
		$_SESSION['email']=$r[1];
		header('location:index.php');
	}
	else
	{
		echo "invalid";
	}

}
	
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Dreamland login</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Clear login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<link  rel="icon" href="img/core-img/Logo.png">
	<link href="css/regstyle.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<!-- title -->
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	 <?php
	 	require_once "header.php";
	 ?>
	<h1>Login</h1>	
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="#" method="post" >
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Email </label>
				<input type="email" name="email" placeholder="Enter your Email " required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-envelope" aria-hidden="true"></i> password </label>
				<input type="password" name="password" placeholder="Enter your password " required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onClick="myFunction()">
					<label class="check" for="check3">Show password</label>
				</div>
			</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "email";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //script ends here -->
			<div class="w3ls-bot">
				<div class="switch-agileits">
					<label class="switch">
						<input type="checkbox">
						<span class="slider round"></span>
						keep me signed in
					</label>
				</div>
				<div class="form-end">
					<a href="index.php" > <input type="submit" value="LOGIN"  name="b1" />  </a>
				</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p>© 2021 Dreamland Login Form. All Rights Reserved | Design by
			<a href="http://w3layouts.com/" target="_blank">Dreamland</a>
		</p>
	</div>
	<!--//copyright-->
	<!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>