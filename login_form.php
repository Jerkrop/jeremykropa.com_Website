<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password_']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password_ = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location: admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location: index.php');

         
      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>





<html lang="en">

<?php include 'includes/header.php';

?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
</head>
<div class="form-container">
   <form action="" method="post">
      <h3>login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
   
      ?>
     

      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password_" required placeholder="Enter your password">
      <div class="g-recaptcha" data-sitekey="6LfDWHQpAAAAAKc_LkIKftO0Hz3dkPp_BXmVxJ7F"></div>
      <input type="submit" name="submit" value="login" class="form-btn">
      <p>don't have an account? <a href="register_form.php">Register</a></p>
      <a href="index.php">Want to go back?</a>

      </div>
   </form>



</html>
<?php include 'includes/footer.php';

?>