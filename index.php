<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

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
<a href="index.php" class="logo">Jeremy Kropa's Portfolio</a>
  <div class="header-right">
      <a href="contactus.html" class="btn">Contact Me</a>
      <a href="logout.php" class="btn">logout</a>
</div>
</div> 
<div class="container">

   <div class="content">
      <h1>Jeremy Kropa's Portfolio</h3>
      <h3>Welcome <span><?php echo $_SESSION['user_name']?></span></h1>
      <p>This is my Home Page for my GitHub & YouTube </p>
      <a href="https://github.com/Jerkrop" class="btn">GitHub</a>
   <a href="https://www.youtube.com/channel/UCKmPdf8VRkO61eMWqETYazw" class="btn">YouTube</a>
     


   </div>


</div>

</body>
</html>