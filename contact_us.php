<?php
session_start();

$message_sent = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_var($_POST['name'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $subject = filter_var($_POST['subject'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_var($_POST['message'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($name && $email && $subject && $message) {
        $mailheader = "From: " . $name . " <" . $email . ">\r\n";
        $recipient = "jerkrop@jeremykropa.com";

        if (@mail($recipient, $subject, $message, $mailheader)) {
            $message_sent = true;
        } else {
            $error = "Failed to send message. Please try again later.";
        }
    } else {
        $error = "Please fill in all fields with valid information.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me | Jeremy Kropa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="form-container">
        <form action="contact_us.php" method="POST">
            <h3>Contact Me</h3>

            <?php if ($message_sent): ?>
                <div class="content" style="padding: 20px 0; background: transparent; border: none; box-shadow: none;">
                    <p style="color: #4ade80; font-size: 1.1rem; font-weight: 600;">Thank you for contacting me! I will get back to you as soon as possible.</p>
                    <a href="index.php" class="btn" style="margin-top: 15px;">Return to Homepage</a>
                </div>
            <?php else: ?>

                <?php if ($error): ?>
                    <span class="error-msg"><?php echo htmlspecialchars($error); ?></span>
                <?php endif; ?>

                <label for="name">Name</label>
                <input type="text" name="name" id="name" required placeholder="Your full name">

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required placeholder="Your email address">

                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" required placeholder="Subject of your message">

                <label for="message">Message</label>
                <textarea name="message" id="message" required placeholder="Type your message here..."></textarea>

                <input type="submit" value="Send Message" class="btn form-btn">

                <div class="form-footer-links">
                    <p><a href="index.php"><i class="bi bi-arrow-left"></i> Want to go back?</a></p>
                </div>

            <?php endif; ?>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>