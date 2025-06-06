<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password_']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password_ = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exists!';

   }else{

      if($pass != $cpass){
         $error[] = 'password do not match!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password_, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
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
   <title>register form</title>
   

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password_" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type">
         <option value="user">user</option>
      </select>
            <div class="g-recaptcha" data-sitekey="6LfDWHQpAAAAAKc_LkIKftO0Hz3dkPp_BXmVxJ7F"></div>
      <input type="submit" name="submit" value="register" class="form-btn">
      <p>Already have an account? <a href="login_form.php">Login</a></p>
      <a href="index.php">Want to go back?</a>
      </div>
   </form>



</html>
<?php include 'includes/footer.php';

?>