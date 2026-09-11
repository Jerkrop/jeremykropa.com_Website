<?php
@include 'config.php';
session_start();

$site_key = "6LfDWHQpAAAAAKc_LkIKftO0Hz3dkPp_BXmVxJ7F";
$secret_key = "YOUR_RECAPTCHA_SECRET_KEY"; // Replace with your actual reCAPTCHA Secret Key

if (isset($_POST['submit'])) {
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password_']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

   // Verify reCAPTCHA with Google API
   $verify_url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha_response}";
   $response = @file_get_contents($verify_url);
   $response_data = json_decode($response);

   if (!$response_data || !$response_data->success) {
      $error[] = 'Please complete the reCAPTCHA verification!';
   } else {
      $select = "SELECT * FROM user_form WHERE email = '$email'";
      $result = mysqli_query($conn, $select);

      if (mysqli_num_rows($result) > 0) {
         $error[] = 'User with this email already exists!';
      } else {
         if ($pass != $cpass) {
            $error[] = 'Passwords do not match!';
         } else {
            $insert = "INSERT INTO user_form(name, email, password_, user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
            exit();
         }
      }
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register | Jeremy Kropa</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container">
   <div class="form-container">
      <form action="" method="post">
         <h3>Create Account</h3>

         <?php
         if (isset($error)) {
            foreach ($error as $err) {
               echo '<span class="error-msg">' . htmlspecialchars($err) . '</span>';
            }
         }
         ?>

         <label for="name">Name</label>
         <input type="text" id="name" name="name" required placeholder="Enter your full name">

         <label for="email">Email</label>
         <input type="email" id="email" name="email" required placeholder="Enter your email">

         <label for="password_">Password</label>
         <input type="password" id="password_" name="password_" required placeholder="Create a password">

         <label for="cpassword">Confirm Password</label>
         <input type="password" id="cpassword" name="cpassword" required placeholder="Confirm your password">

         <label for="user_type">Account Type</label>
         <select id="user_type" name="user_type">
            <option value="user">User</option>
         </select>

         <div class="recaptcha-wrapper">
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
         </div>

         <input type="submit" name="submit" value="Register Now" class="btn form-btn">

         <div class="form-footer-links">
            <p>Already have an account? <a href="login_form.php">Login here</a></p>
            <p><a href="index.php"><i class="bi bi-arrow-left"></i> Return to Homepage</a></p>
         </div>
      </form>
   </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>