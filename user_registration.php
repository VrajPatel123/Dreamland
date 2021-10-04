<?php
session_start();
$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');

if(isset($_POST['b1']))
    {
        $email_id=$_POST['email_id'];
        $password=$_POST['password'];
        $user_name=$_POST['user_name'];
        $gender=$_POST['r1'];   
        $city=$_POST['city'];
        $dob=$_POST['dob'];
        $mobile_no=$_POST['mobile_no'];
        $security_question=$_POST['security_question'];
        $answer=$_POST['answer'];
            
        
       
        mysqli_query($cn,"insert into user_registration (email_id,password,user_name,gender,city,dob,mobile_no,security_question,answer) values ('$email_id','$password','$user_name','$gender','$city','$dob','$mobile_no','$security_question','$answer')") or die('database Error');
        echo "inserted";

        		
        header('location:index.php');    
    }
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Dreamland Registration</title>
	
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

<body>	

	 <?php
	 	require_once "header.php";
	 ?>

	<h1>Registration </h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="#" method="post" >
			<!--<div class="agile-field-txt">
				

			   <label>
					<i class="fa fa-globe" aria-hidden="true"></i> User Type </label>
					<select name="city" required="">
                            <option value="none" selected="" disabled="">Select</option>
                             <option value="surat">I am a Real Estate Agent</option>
                             <option value="baroda">I am a Builder</option>
                             <option value="mumbai">I am a Real Estate Invstor</option>
                             <option value="delhi">I am a Real Property User</option>
                    </select>
				
                    </div>-->
                <div class="agile-field-txt">   
				<label>
					<i class="fa fa-user-circle-o" aria-hidden="true"></i> Username </label>
				<input type="text" name="user_name" placeholder="Enter your name " pattern="^[A-Z a-z ]*$" required="" />
			</div>
			<div class="agile-field-txt">
				<label>

					<i class="fa fa-envelope" aria-hidden="true"></i> Email </label>
				<input type="email" name="email_id" placeholder="Enter your email "  required pattern="^\S+@\S+\.\S+$" title="example@mail.com"  />
			</div>
			<div class="agile-field-txt" >
				<label>
					<i class="fa fa-globe"  aria-hidden="true"></i> City </label>
					<select name="city"  required="required"  >
                             
                             <option value="surat" selected="">Surat</option>
                             <option value="baroda">Baroda</option>
                             <option value="mumbai">Mumbai</option>
                             <option value="delhi">Delhi</option>
                             <option value="ahmedabad">Ahmedabad </option>
                    </select>
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-male" aria-hidden="true"></i> Gender </label>
				<input type="radio" name="r1"   required="" value="male" checked="checked" /> <i class="fa fa-male"> </i> <font color="white"> Male</font>
				<input type="radio" name="r1"   required="" value="female" /><i class="fa fa-female"> </i> <font color="white"> Female</font>
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-calendar" aria-hidden="true"></i> Date Of Birth </label>
				<input type="date" name="dob" placeholder="Enter your date of birth " required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-phone" aria-hidden="true"></i> Mobile No. </label>
				<input type="text" name="mobile_no" placeholder="Enter your mobile no " pattern="^\d{10}$" required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-question-circle" aria-hidden="true"></i> Security Question </label>
					<select id="issueinput6" name="security_question" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status">
                                        <option value="not started">What's Your Nick Name ?</option>
                                        <option value="started">What's Your birth date ?</option>
                                        <option value="fixed">What's Your School Name ?</option>
                    </select>
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-pencil" aria-hidden="true"></i> Answer </label>
				<input type="text" name="answer" placeholder="Enter your answer " required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-lock" aria-hidden="true"></i> password </label>
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
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //script ends here -->
			<div class="w3ls-bot">
				
				<div class="form-end">
					<input type="submit" name="b1" value="REGISTRATION">
				</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p>© 2021 Dreamland Registration . All Rights Reserved | Design by
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