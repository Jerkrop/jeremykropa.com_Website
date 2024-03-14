<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="header">
        <a href="index.php" class="logo">Jeremy Kropa's Portfolio</a>
          <div class="header-right">
          <a href="register_form.php" class="btn">Register</a>
              <a href="contactus.html" class="btn">Contact Me</a>
              <a href="resume.html" class="btn">Resume</a>
              <?php  if (!isset($_SESSION['user_name'])) : ?><a href="login_form.php" class="btn">Login</a><?php endif ?>
         <?php  if (isset($_SESSION['user_name'])) : ?> <a href="logout.php" class="btn">Logout</a><?php endif ?>
         </div>  
   
    

    </body>
</html>
