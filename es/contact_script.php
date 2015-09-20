<?php $thisPage="email"; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Thank you for contacing us, we will get back to you as soon as possible</title>
<?php include 'includes/head.php';?> 
</head>
<body>
<div class="header-top">
</div>
<div class="container">
<?php include 'includes/header.php';?>
<?php 
if(isset($_POST['submit'])){
    $to = "greyhat777@mail.fresnostate.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $fullname .",". " " . " wrote the following:" . "\n\n" . $_POST['message']."\n\n"."Email them at "." ".$email;
    $message2 = "Here is a copy of your message " . $fullname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent.<br/> Thank you " . $fullname . ", we will answer your questions or respond to your comments as quickly as possible.";
    }
?>
<?php include 'includes/footer.php';?>
</body>
</html>

