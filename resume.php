<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="css/resume.css">
</head>
<body>

    <div class="header">
        <a href="index.php" class="logo">Jeremy Kropa's Portfolio</a>
          <div class="header-right">
          <a href="register_form.php" class="btn">Register</a>
              <a href="contactus.html" class="btn">Contact Me</a>
              <a href="resume.php" class="btn">Resume</a>
              <?php  if (!isset($_SESSION['user_name'])) : ?><a href="login_form.php" class="btn">Login</a><?php endif ?>
         <?php  if (isset($_SESSION['user_name'])) : ?> <a href="logout.php" class="btn">Logout</a><?php endif ?>
         </div> 

         <div class="container">
         <div class="content">

   <h1>Jeremy Kropa <h1>
    <p>Email me at: jerkrop@jeremykropa.com  </p>
<h3>EDUCATION:</h3>
<h5>Associate of Applied Science:</h5><p>Computer Software Engineering Technology </p>
<p>Thaddeus Stevens College of Technology ▪ Lancaster, PA 
August 2021 – May 2023 
</p>
<h5>Diploma:<h5>
   <p>Kennard-dale High School ▪ Fawn Grove, PA 
</p>
         </br>
<h3>RELATED SKILLS/COURSEWORK: </h3>
<p>▪ Languages: HTML, CSS, PYTHON, POSTGRESQL, JAVASCRIPT, PHP, JAVA, FLUTTER </P>
<p>▪ Intro to Web Applications ▪ Web Development 1 ▪ Technical Requirements & Data Structures </p>
<p>▪ Mobile Development ▪ Web Development 2 ▪ Database management ▪ Software Principles ▪ Software Principles </p>
<p>▪ Software Project 1 & 2</p>

         </br>
<h3>WORK EXPERIENCE:</h3>
<h5></u>Software Testing Internship </u><h5>
<p>Edooket ▪ Lancaster, PA </p>
<p>February 2023 – May 2023 </p>
<p>Tested the Edooket website for any bugs.</p>
         </br>
<h5> IT Helpdesk Support Specialist </h5>
<p>OAKWORKS, INC▪ New Freedom, PA </p>
<p>June 2023 – Present </p>
<p>Use of Office 365 Software</p>
<p>Use of Active Directory to add, remove, edit user accounts.</p>
<p>Provides End User Helpdesk Support to Office, Sales, and production staff to assist with computer and telecom related issues that may arise.</p>
<p>Diagnose and resolve technical hardware and software issues.</p>
<p>Log all helpdesk interactions.<p>
<p>administer helpdesk software.</p>
<p>resolve technical problems with local area network and VPN users.</p>
         </br>
         </div>
         </div>
</body>
</html>
