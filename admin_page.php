<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jeremy Kropa's Admin Home Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="header">
<a href="index.php" class="logo">Jeremy Kropa's Portfolio</a>
  <div class="header-right">
            <a href="contactus.html" class="btn">Contact Me</a>
      <a href="logout.php" class="btn">logout</a>
      <a href="resume.php" class="btn">Resume</a>

</div>
</div>  
<div class="container">
<video autoplay muted loop>
  <source src="/images/backgroundvideo.mp4" type="video/mp4">
</video>
   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name']?></span></h1>
      <p>This is my Portfolio's Admin Home page</p>
      <a href="https://github.com/Jerkrop" class="btn">GitHub</a>
     
   </div>

</div>

</body>
</html>