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

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>
   

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/form.css">
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
   
<div class="card">

   <form action="" method="post">
      <h2>register</h2>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      
      <div class="col">
         <div class="form-group">
      <input type="text" name="name" required placeholder="Enter your name">
   </div>
   </div>

   <div class="col">
         <div class="form-group">
   <input type="email" name="email" required placeholder="Enter your email">
   </div>
   </div>

   <div class="col">
         <div class="form-group">
      <input type="password" name="password_" required placeholder="Enter your password">
      </div>
      </div>
      
      <div class="col">
      <div class="form-group">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      </div>
      </div>
      
      <select name="user_type">
         <option value="user">user</option>
      </select>
            <div class="g-recaptcha" data-sitekey="6LfDWHQpAAAAAKc_LkIKftO0Hz3dkPp_BXmVxJ7F"></div>

            <div class="col">
      <input type="submit" name="submit" value="register" class="form-btn">
   </div>

      <p style="color: white;">Already have an account? <a href="login_form.php">Login</a></p>
      <a href="index.php">Want to go back?</a>
   </div>
   </div>
   </form>

</div>

</body>
</html>