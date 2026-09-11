<?php
@include 'config.php';
session_start();

$site_key = "6LfDWHQpAAAAAKc_LkIKftO0Hz3dkPp_BXmVxJ7F";
$secret_key = "6LfDWHQpAAAAADm3mPAkYfk5Ic5jUccPBFVxX4FM"; // Replace with your actual reCAPTCHA Secret Key

if (isset($_POST['submit'])) {
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password_']);
   $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

   // Verify reCAPTCHA with Google API
   $verify_url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha_response}";
   $response = @file_get_contents($verify_url);
   $response_data = json_decode($response);

   if (!$response_data || !$response_data->success) {
      $error[] = 'Please complete the reCAPTCHA verification!';
   } else {
      $select = "SELECT * FROM user_form WHERE email = '$email' AND password_ = '$pass'";
      $result = mysqli_query($conn, $select);

      if (mysqli_num_rows($result) > 0) {
         $row = mysqli_fetch_array($result);

         if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location: admin_page.php');
            exit();
         } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location: index.php');
            exit();
         }
      } else {
         $error[] = 'Incorrect email or password!';
      }
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login | Jeremy Kropa</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container">
   <div class="form-container">
      <form action="" method="post">
         <h3>Login</h3>
         
         <?php
         if (isset($error)) {
            foreach ($error as $err) {
               echo '<span class="error-msg">' . htmlspecialchars($err) . '</span>';
            }
         }
         ?>

         <label for="email">Email</label>
         <input type="email" id="email" name="email" required placeholder="Enter your email">

         <label for="password_">Password</label>
         <input type="password" id="password_" name="password_" required placeholder="Enter your password">

         <div class="recaptcha-wrapper">
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
         </div>

         <input type="submit" name="submit" value="Login" class="btn form-btn">

         <div class="form-footer-links">
            <p>Don't have an account? <a href="register_form.php">Register now</a></p>
            <p><a href="index.php"><i class="bi bi-arrow-left"></i> Return to Homepage</a></p>
         </div>
      </form>
   </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>