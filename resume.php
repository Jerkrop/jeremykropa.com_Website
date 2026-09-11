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

        <!-- Professional Summary -->
        <section class="resume-section">
            <h3>Professional Summary</h3>
            <div class="resume-item">
                <p>
                    Detail-oriented IT professional with a strong foundation in software engineering and over two years of hands-on experience in helpdesk support. Adept at resolving hardware, software, and network issues, with a demonstrated ability to support end users across office, sales, and production environments. Strong background in customer service with five years of experience in fast-paced environments. Currently pursuing a Bachelor of Science in Information Technology. Passionate about technology and eager to contribute technical expertise to a forward-thinking organization.
                </p>
            </div>
        </section>

        <!-- Education -->
        <section class="resume-section">
            <h3>Education</h3>
            <div class="resume-item">
                <h5>Bachelor of Science, Information Technology</h5>
                <p class="meta">University of Phoenix ▪ Phoenix, AZ | August 2024 – June 2026 | GPA: 3.67</p>
            </div>
            <div class="resume-item">
                <h5>Associate of Applied Science, Computer Software Engineering Technology</h5>
                <p class="meta">Thaddeus Stevens College of Technology ▪ Lancaster, PA | August 2021 – May 2023 | GPA: 3.47</p>
            </div>
        </section>

        <!-- Skills & Coursework -->
        <section class="resume-section">
            <h3>Related Skills & Coursework</h3>
            <div class="resume-item">
                <p><strong>Languages:</strong> HTML, CSS, Python, PostgreSQL, JavaScript, PHP, Java, Flutter</p>
                <p><strong>Coursework:</strong> Intro to Web Applications, Web Development 1 & 2, Technical Requirements & Data Structures, Mobile Development, Database Management, Software Principles, Software Project 1 & 2</p>
            </div>
        </section>

        <!-- Professional Experience -->
        <section class="resume-section">
            <h3>Professional Experience</h3>
            
            <div class="resume-item">
                <h5>Intermittent Liquor Store Clerk</h5>
                <p class="meta">PLCB ▪ Etters, PA | Feb 2026 – Present</p>
            </div>

            <div class="resume-item">
                <h5>IT Helpdesk Technician</h5>
                <p class="meta">Crime Intervention Alarm ▪ York, PA | July 2025 – Jan 2026</p>
                <ul>
                    <li>Took incoming phone calls regarding Camera Systems, Door Access, and Fire Systems to assist in troubleshooting problems across 1,000+ commercial and residential clients in a helpdesk environment.</li>
                    <li>Created and set up remote PCs for new installs and service, ensuring all software was updated.</li>
                    <li>Created and managed incoming support tickets within Zoho Desk.</li>
                </ul>
            </div>

            <div class="resume-item">
                <h5>IT Helpdesk Support Specialist</h5>
                <p class="meta">OAKWORKS, INC. ▪ New Freedom, PA | June 2023 – May 2025</p>
                <ul>
                    <li>Provided Tier 1 and Tier 2 technical support for office, sales, and production departments, supporting 100+ end users.</li>
                    <li>Utilized Office 365 and Active Directory to manage user accounts, permissions, and troubleshooting.</li>
                    <li>Diagnosed and resolved software, hardware, and network connectivity issues.</li>
                    <li>Maintained detailed logs of helpdesk interactions using a SharePoint Online integrated helpdesk system, resolving an average of 10–15 tickets per day.</li>
                    <li>Provided support for VPN users and ensured secure remote access.</li>
                    <li>Assisted with onboarding and offboarding processes, including system imaging and account setup.</li>
                </ul>
            </div>

            <div class="resume-item">
                <h5>College Software Testing Internship</h5>
                <p class="meta">Edooket ▪ Lancaster, PA | February 2023 – May 2023</p>
                <ul>
                    <li>Conducted functional and usability testing on the Edooket website.</li>
                    <li>Reported and documented bugs, collaborating with the development team to verify fixes.</li>
                    <li>Gained exposure to Agile development practices and bug-tracking tools.</li>
                </ul>
            </div>

            <div class="resume-item">
                <h5>Wendy’s Crew Member</h5>
                <p class="meta">Wendy's ▪ Shrewsbury, PA | May 2017 – May 2023</p>
                <ul>
                    <li>Maintained fries and grill stations.</li>
                    <li>Took customer orders at front register and bagged orders for front register/pickup window (PUW).</li>
                    <li>Performed morning maintenance duties.</li>
                </ul>
            </div>
        </section>

    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>