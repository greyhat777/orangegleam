<?php $thisPage="presupesto"; ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Fresno Website Design Company - Obtén un presupuesto gratis para tus páginas web. </title> 
<meta name="Description" CONTENT="Obtén un presupuesto gratis para tus páginas web.  |OrangeGleam.com">
<?php include 'includes/head.php';?>
</head>
<body>
<?php include_once("../analyticstracking.php") ?>  
<!-- header -->
<div class="header-top">
</div>
<div class="container">
<?php include 'includes/header.php';?>    
<!-- header -->
<div class="contact">
    <h3>Opten un presupuesto gratis! </h3>

      <p>
      Llámanos hoy, o mándanos un mensaje si te interesa un presupuesto gratuito para tu proyecto. 
    </p>
  
      <div class="col-md-4">
              <h3>Llámanos hoy, o mándanos un correo electrónico.</h3>
                <div class="address">
                  <p>Telephone : (559) 376-0051</p> 
                  <p>E-mail : <a href="mailto:info@orangegleam.com">info@orangegleam.com</a></p>
                </div>
            </div>
            <div class="col-md-8 contact-left-text">
            <h3>Los detalles de tu mensaje </h3>
             <form method="post" action="quote_script.php">      
  <div class="form-group">:
    <div class="col-xs-7">
    Tu Nombre: <input type="text" name="fullname" required>
  </div>
  </div>
    <div class="form-group">
    <div class="col-xs-7">
    Tu localización : <input type="text" name="location" required>
  </div>
  </div>
  <div class="form-group">
    <div class="col-xs-7">
    Tu Email: <input type="text" name="email" required>
  </div>
  </div>
  <div class="form-group">
    <div class="col-xs-7">
    Tu número telefónico: <input type="text" name="phonenumber" required>
  </div>
  </div>
  <div class="form-group">
    <div class="col-xs-12">
   Tu mensaje?:<br><textarea rows="5" name="message" cols="30"></textarea>
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
