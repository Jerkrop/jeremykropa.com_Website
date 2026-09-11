<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="header">
    <a href="index.php" class="logo">Jeremy Kropa</a>
    <div class="header-right">
        <?php if (!isset($_SESSION['user_name'])) : ?>
            <a href="login_form.php" class="nav-link">Login</a>
        <?php endif; ?>
        <?php if (isset($_SESSION['user_name'])) : ?>
            <a href="logout.php" class="nav-link">Logout</a>
        <?php endif; ?>
        <a href="register_form.php" class="nav-link">Register</a>
        <a href="contact_us.php" class="nav-link">Contact Me</a>
        <a href="resume.php" class="btn">Resume</a>
    </div>
</div>