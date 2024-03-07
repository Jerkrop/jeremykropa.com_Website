 
<?php

@include 'config.php';

session_start();

?>


<!DOCTYPE html>
<html lang="en">
   
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jeremy Kropa's User Home Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="header">
<a href="" class="logo">Jeremy Kropa's Portfolio</a>
  <div class="header-right">
   <?php 

if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
      <a href="logout.php">Logout</a>
<?php }else{ ?>
     <a href="login_form.php">Login</a>
     <a href="register_form.php">Register</a>
     <a href="contactus.html">Contact Me</a>
<?php } ?>
     

</div>
</div> 
<div class="container">

   <div class="content">
      <h1>Jeremy Kropa's Portfolio</h1>
      <h3>Welcome <span>USER</span></h3>
      <p>This is my Home Page for my GitHub & YouTube </p>
      <a href="https://github.com/Jerkrop" class="btn">GitHub</a>
   <a href="https://www.youtube.com/channel/UCKmPdf8VRkO61eMWqETYazw" class="btn">YouTube</a>
     


   </div>


</div>

</body>
</html>
