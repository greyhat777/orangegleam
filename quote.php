<?php $thisPage="quote"; ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Fresno Website Design Company - Quote</title> 
<meta name="Description" CONTENT="Get a Free quote for your next website project |OrangeGleam.com">
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
    <h3>Get a free quote for your project</h3>

      <p>
      Give us a call or send us a message if you're interested in a <u>FREE</u> estimate for your project.
    </p>
  
      <div class="col-md-4">
              <h3>Email or call me</h3>
                <div class="address">
                  <p>Telephone : (559) 376-0051</p> 
                  <p>E-mail : <a href="mailto:info@orangegleam.com">info@orangegleam.com</a></p>
                </div>
            </div>
            <div class="col-md-8 contact-left-text">
            <h3>Project details</h3>
             <form method="post" action="quote_script.php">      
  <div class="form-group">:
    <div class="col-xs-7">
    Full Name: <input type="text" name="fullname" required>
  </div>
  </div>
    <div class="form-group">
    <div class="col-xs-7">
    Location: <input type="text" name="location" required>
  </div>
  </div>
  <div class="form-group">
    <div class="col-xs-7">
    Email: <input type="text" name="email" required>
  </div>
  </div>
  <div class="form-group">
    <div class="col-xs-7">
    Phone Number: <input type="text" name="phonenumber" required>
  </div>
  </div>
  <div class="form-group">
    <div class="col-xs-12">
   How can we help you?:<br><textarea rows="5" name="message" cols="30"></textarea>
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
