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
   <script src="youtube_Automation.js"></script>

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

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name']?></span> to my Portfolio Website</h1>
      <p>This is my Home Page for my GitHub Projects & Youtube Updates</p>
      <a href="https://github.com/Jerkrop" class="btn">GitHub</a>
     
      <div class="videos">
<div>
<iframe class="latestVideoEmbed" vnum='0' width="600" height="340" frameborder="0" allowfullscreen></iframe>
</div>
                                            
<div>
<iframe class="latestVideoEmbed" vnum='1' width="600" height="340" frameborder="0" allowfullscreen></iframe>
</div>
                                            
<div>
<iframe class="latestVideoEmbed" vnum='2' width="600" height="340" frameborder="0" allowfullscreen></iframe>
</div>
  </div>
   </div>

</div>


</body>
</html>