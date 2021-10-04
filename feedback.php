<?php
session_start();
$cn=mysqli_connect('localhost','root','') or die('not connected');
mysqli_select_db($cn,'final_project');

    $email=$_SESSION['email'];

    if(isset($_POST['b1']))
    {
        $email=$_POST['mail'];
        $message=$_POST['message'];
        $rating=$_POST['rating'];
        if(!mysqli_query($cn,"insert into feedback (email_id,message,rating) values('$email','$message',$rating)")){
          echo mysqli_error($cn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Dreamland | Feedback</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/Logo.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

      <style type="text/css">
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
    </style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->

    <header class="header-area">

         <?php
            require_once "header.php";
        ?>                            
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/home/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">

                        <h3 class="breadcumb-title">Feedback</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6> Feedback</h6>
                    </div>
                </div>
            </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="feedback.php" method="POST" enctype="multipart/form-data">
                             <div class="form-group">
                                 <label for="eventInput1">Email Id</label>
                                <input type="email" class="form-control" name="mail" id="contact-email" placeholder="Your Email" required>
                            </div>
                           
                              <div class="form-group">
                                 <label for="eventInput1">message</label>
                                <textarea  class="form-control" name="message" id="Subject" placeholder="enter message"></textarea>
                            </div>
                             
                            <div>

                            <fieldset class="rating">
                  <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                  <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="  star1half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
            </div>
            <br>
            <br>
                            <input type="submit" class="btn south-btn" name="b1" value="Submit" >
                        </form>
                        <br>
                        <table  class="table table-dark">
                  <tr>
                    <th>Name</th>
                    <th>message</th>
                    <th>rating</th>
                  </tr>
                <?php  
                  $result=mysqli_query($cn,"select * from feedback");
                  

                  while($r=mysqli_fetch_array($result))
                  {
                ?>
                <div>
                  <tr>
                    <td><?php echo $r[1]; ?></td>
                    <td><?php echo $r[2]; ?></td>
                    <th><fieldset class="rating">
                  <input type="checkbox" id="star5" name="rating" value="5" <?php if($r[3]=="5") {?> checked="checked" <?php }?>/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="checkbox" id="star4half" name="rating" value="4.5" <?php if($r[3]=="4.5") {?> checked="checked" <?php }?> /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                  <input type="checkbox" id="star4" name="rating" value="4" <?php if($r[3]=="4") {?> checked="checked" <?php }?>/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="checkbox" id="star3half" name="rating" value="3.5" <?php if($r[3]=="3.5") {?> checked="checked" <?php }?>/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                  <input type="checkbox" id="star3" name="rating" value="3" <?php if($r[3]=="3") {?> checked="checked" <?php }?>/><label class = "full" for="star3" title="Meh - 3 stars"></label>
                  <input type="checkbox" id="star2half" name="rating" value="2.5" <?php if($r[3]=="2.5") {?> checked="checked" <?php }?>/><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                  <input type="checkbox" id="star2" name="rating" value="2" <?php if($r[3]=="2") {?> checked="checked" <?php }?>/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="checkbox" id="star1half" name="rating" value="1.5" <?php if($r[3]=="1.5") {?> checked="checked" <?php }?>/><label class="half" for="  star1half" title="Meh - 1.5 stars"></label>
                  <input type="checkbox" id="star1" name="rating" value="1" <?php if($r[3]=="1") {?> checked="checked" <?php }?>/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                  <input type="checkbox" id="starhalf" name="rating" value="0.5" <?php if($r[3]=="0.5") {?> checked="checked" <?php }?>/><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset></th>
                  </tr>
                  </div>
                <?php } ?>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
   

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
          <?php
            require_once "footer.php";
        ?>   
    </footer>
    <!-- ##### Footer Area End ##### -->

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
