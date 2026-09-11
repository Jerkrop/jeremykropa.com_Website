<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume | Jeremy Kropa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="resume-card">
        
        <header class="resume-header">
            <h1>Jeremy Kropa</h1>
            <p class="contact-info">Email: jerkrop@jeremykropa.com</p>
        </header>

        <section class="resume-section">
            <h3>Education</h3>
            <div class="resume-item">
                <h5>Associate of Applied Science: Computer Software Engineering Technology</h5>
                <p class="meta">Thaddeus Stevens College of Technology ▪ Lancaster, PA | August 2021 – May 2023</p>
            </div>
            <div class="resume-item">
                <h5>Diploma</h5>
                <p class="meta">Kennard-Dale High School ▪ Fawn Grove, PA</p>
            </div>
        </section>

        <section class="resume-section">
            <h3>Related Skills & Coursework</h3>
            <div class="resume-item">
                <p><strong>Languages:</strong> HTML, CSS, Python, PostgreSQL, JavaScript, PHP, Java, Flutter</p>
                <p><strong>Coursework:</strong> Intro to Web Applications, Web Development 1 & 2, Technical Requirements & Data Structures, Mobile Development, Database Management, Software Principles, Software Project 1 & 2</p>
            </div>
        </section>

        <section class="resume-section">
            <h3>Work Experience</h3>
            <div class="resume-item">
                <h5>Software Testing Internship</h5>
                <p class="meta">Edooket ▪ Lancaster, PA | February 2023 – May 2023</p>
                <ul>
                    <li>Tested the Edooket web applications to identify and resolve software bugs.</li>
                </ul>
            </div>
            
            <div class="resume-item">
                <h5>IT Helpdesk Support Specialist</h5>
                <p class="meta">OAKWORKS, INC ▪ New Freedom, PA | June 2023 – Present</p>
                <ul>
                    <li>Utilize Office 365 software and Active Directory to manage and administer user accounts.</li>
                    <li>Provide end-user support to office, sales, and production personnel for computer and telecom issues.</li>
                    <li>Diagnose and resolve technical hardware, software, local area network, and VPN connectivity problems.</li>
                    <li>Log all helpdesk interactions and administer ticketing software.</li>
                </ul>
            </div>
        </section>

    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>