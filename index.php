<?php
@include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeremy Kropa | Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="content">
        <h1>Welcome to my Portfolio Website</h1>
        <p>Explore my projects, view my professional resume, or get in touch directly.</p>
        <div>
            <a href="https://github.com/Jerkrop" class="btn" target="_blank" rel="noopener">
                <i class="bi bi-github" style="margin-right: 8px;"></i> GitHub Profile
            </a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>