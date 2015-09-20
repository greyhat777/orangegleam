<?php $thisPage="contact"; ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Fresno Website Design Company - Contact Us </title>
<meta name="Description" CONTENT="Get in contact with us here at Fresno Website Design | OrangeGleam.com"> 
<?php include 'includes/head.php';?>
</head>
<body>
<?php include_once("analyticstracking.php") ?>  
<!-- header -->
<div class="header-top">
</div>
<div class="container">
<?php include 'includes/header.php';?>    
<!-- header -->
<div class="contact">
    <h3>Contact Us</h3>
  
      <div class="col-md-4">
              <h3>Contact Info</h3>
                <div class="address">
                  <p><span class="glyphicon glyphicon-earphone"></span> (559)376-0051</p> 
                  <p><span class="glyphicon glyphicon-envelope"></span> info@orangegleam.com</p>
                </div>
            </div>
            <div class="col-md-8 contact-left-text">
            <h3>Contact Form</h3>
             <form method="post" action="contact_script.php">      
  <div class="form-group">:
    <div class="col-xs-7">
    Full Name: <input type="text" name="fullname" required>
  </div>
  </div>
  <div class="form-group">
    <div class="col-xs-7">
    Email: <input type="text" name="email" required>
  </div>
  </div>
  <div class="form-group">
    <div class="col-xs-12">
    Comments/Questions:<br><textarea rows="5" name="message" cols="30"></textarea>
  </div>
  </div>
  <div class="col-xs-12">
  <input type="submit" name="submit" value="Submit">
  </div>
</form>
            </div>     
            <div class="clearfix"> </div>
  </div>
<?php include 'includes/footer.php';?>
</div>
</body>
</html>


