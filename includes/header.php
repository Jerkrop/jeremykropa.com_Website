<link rel="stylesheet" href="css/style.css">

<div class="header">
<a href="index.php" class="logo">Jeremy Kropa</a>
  <div class="header-right">
  <?php  if (!isset($_SESSION['user_name'])) : ?><a href="login_form.php" class="btn">Login</a><?php endif ?>
         <?php  if (isset($_SESSION['user_name'])) : ?> <a href="logout.php" class="btn">Logout</a><?php endif ?>
  <a href="register_form.php" class="btn">Register</a>
      <a href="contact_us.html" class="btn">Contact Me</a>
      <a href="resume.php" class="btn">Resume</a>

      
</div>
</div> 