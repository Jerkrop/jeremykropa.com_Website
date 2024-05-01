 
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
   <title>Home Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="header">
<a href="index.php" class="logo">Jeremy Kropa</a>
  <div class="header-right">
  <?php  if (!isset($_SESSION['user_name'])) : ?><a href="login_form.php" class="btn">Login</a><?php endif ?>
         <?php  if (isset($_SESSION['user_name'])) : ?> <a href="logout.php" class="btn">Logout</a><?php endif ?>
  <a href="register_form.php" class="btn">Register</a>
      <a href="contactus.html" class="btn">Contact Me</a>
      <a href="resume.php" class="btn">Resume</a>

      
</div>
</div> 
<div class="container">

   <div class="content">
  
   
      <h1>Welcome <span>USER</span> to my Portfolio Website</h1>
      
      <p>This is my Home Page for my GitHub Projects & Youtube Updates</p>

      <a href="https://github.com/Jerkrop" class="btn">GitHub</a>     
      <br>
      <div>
         <iframe src="https://www.youtube.com/embed?listType=playlist&list=UUKmPdf8VRkO61eMWqETYazw" vnum='0' width="600" height="340" frameborder="0" allowfullscreen></iframe>
         </div>

      
 
         </div>


</body>
</html>
