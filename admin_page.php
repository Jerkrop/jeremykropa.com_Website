<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Dashboard | Jeremy Kropa</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container">
   <div class="content">
      <h1>Welcome <span><?php echo htmlspecialchars($_SESSION['admin_name']); ?></span></h1>
      <p>This is your personal admin panel for managing portfolio items and project repositories.</p>
      <div style="margin-top: 20px;">
         <a href="https://github.com/Jerkrop" class="btn" target="_blank" rel="noopener">
            <i class="bi bi-github" style="margin-right: 8px;"></i> GitHub Dashboard
         </a>
      </div>
   </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>