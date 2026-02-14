<?php
// SolTech PLC - Configuration & Form Logic
$brand_primary = "#3a0ca3";
$brand_secondary = "#ffb400";

$message_sent = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic Form Logic (You can connect this to an SMTP server later)
    $name = strip_tags($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = strip_tags($_POST['subject']);
    $message = strip_tags($_POST['message']);
    
    // mail("your-email@soltech-ethiopia.com", $subject, $message, "From: $email");
    $message_sent = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SolTech PLC | Enterprise ERP & Web Solutions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        :root { --primary: <?php echo $brand_primary; ?>; --secondary: <?php echo $brand_secondary; ?>; }
    </style>
</head>
<body>

<nav>
    <div class="nav-container">
<a href="index.php" class="logo-link">
            <img src="/images/logo7.png" alt="SolTech Logo" class="logo-img">
        </a>      
          <ul class="nav-links">
            <li><a href="#about">About </a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#process">Process</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><button id="theme-toggle"><i class="fas fa-moon"></i></button></li>
        </ul>
    </div>
</nav>

<header class="hero-section">
   <div class="hero-content">
    <h1>Empowering Business Through Technology</h1>
    <p>Expert ERP & Web Solutions for Modern Enterprises</p>
    <a href="#contact" class="btn-primary">Partner With Us</a>
</div>
</header>

<section id="about" class="about-section">
    <div class="about-container">
        <div class="about-header">
            <span class="sub-title">Corporate Profile</span>
            <h2>Bridging the Gap Between <br><span class="highlight">Business & Technology</span></h2>
            <p class="about-description">
                SolTech PLC is a premier technology consulting firm specializing in end-to-end business automation. 
                We deliver high-performance ERP systems and custom web applications that empower industry leaders 
                to scale with total confidence and technical excellence.
            </p>
        </div>

        <div class="about-stats-grid">
            <div class="stat-card">
                <div class="stat-number">10+</div>
                <div class="stat-label">Enterprise Projects</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">100%</div>
                <div class="stat-label">Client Retention</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">24/7</div>
                <div class="stat-label">System Support</div>
            </div>
            <div class="stat-card highlight-card">
                <div class="stat-number">5+</div>
                <div class="stat-label">Years of Excellence</div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="bg-primary-section">
    <h2 class="section-title text-center">Our Specialized Services</h2>
    <div class="services-grid">
        <?php
        $services = [
            [
                'title' => 'ERP Implementation',
                'short' => 'Streamline your enterprise operations with automated workflows.',
                'full' => 'End-to-end Odoo & custom ERP deployment. We specialize in automating finance, supply chain, and human capital management for large-scale PLCs.'
            ],
            [
                'title' => 'Custom Modules',
                'short' => 'Bespoke backend tools built with Python and Django.',
                'full' => 'We develop secure, scalable internal modules that bridge the gaps in your existing software, focusing on high-performance business logic.'
            ],
            [
                'title' => 'Web Development',
                'short' => 'Modern, high-speed platforms for a global digital presence.',
                'full' => 'Enterprise-grade websites built with Next.js and Strapi. We focus on speed, SEO, and seamless user experiences for corporate clients.'
            ],
            [
                'title' => 'Ongoing Support',
                'short' => '24/7 technical maintenance and system optimization.',
                'full' => 'Dedicated SLA-based support and cloud monitoring to ensure your enterprise infrastructure remains resilient and up-to-date.'
            ]
        ];
        foreach ($services as $s): ?>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-front">
                    <h3><?php echo $s['title']; ?></h3>
                    <p class="short-info"><?php echo $s['short']; ?></p>
                </div>
                <div class="flip-back">
                    <h3>Deep Dive</h3>
                    <p><?php echo $s['full']; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<section id="process">
    <h2 class="section-title">Our 5-Step Methodology</h2>
    <div class="process-container">
        <?php
        $steps = [
            ['num' => '01', 'title' => 'Discovery', 'desc' => 'We analyze your current business workflows and identify gaps in your ERP or digital presence.'],
            ['num' => '02', 'title' => 'Architecture', 'desc' => 'Our experts design a scalable system architecture using Python, Django, or Odoo frameworks.'],
            ['num' => '03', 'title' => 'Development', 'desc' => 'Agile engineering of your solution, ensuring high performance and secure database management.'],
            ['num' => '04', 'title' => 'QA & Testing', 'desc' => 'Rigorous testing of internal systems like bid management or ERP modules to ensure zero-fail operations.'],
            ['num' => '05', 'title' => 'Deployment', 'desc' => 'Seamless launch and staff training, followed by our ongoing technical support and maintenance.']
        ];
        foreach ($steps as $step): ?>
        <div class="process-step">
            <div class="step-badge"><?php echo $step['num']; ?></div>
            <h3><?php echo $step['title']; ?></h3>
            <p><?php echo $step['desc']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<section id="portfolio">
    <h2 class="section-title text-center">Project Excellence</h2>
    <div class="portfolio-grid">
        <div class="p-card">
            <div class="p-header">
                <h3>Bid Management System</h3>
                <span class="p-client">PSS Trading PLC</span>
            </div>
            <div class="p-body">
                <p>An internal Laravel automation system designed for high-stakes procurement. It handles vendor evaluations and digital bidding workflows with encrypted security.</p>
                <span class="p-tech">Laravel • MySQL • Internal</span>
            </div>
        </div>

        <div class="p-card">
            <div class="p-header">
                <h3>Corporate Platform</h3>
                <span class="p-client">PSS Trading PLC</span>
            </div>
            <div class="p-body">
                <p>A high-performance public-facing website optimized for the Ethiopian trading market, featuring real-time content management and SEO excellence.</p>
                <a href="https://trading.pss-ethiopia.com" target="_blank" class="view-link">Launch Project <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="p-card">
            <div class="p-header">
                <h3>RohaJobs Portal</h3>
                <span class="p-client">Roha Jobs PLC</span>
            </div>
            <div class="p-body">
                <p>A comprehensive recruitment engine managing thousands of job seekers. Built with a PHP backend for rapid processing and database efficiency.</p>
                <a href="https://rohajobs.com.et" target="_blank" class="view-link">Launch Project <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="p-card">
            <div class="p-header">
                <h3>Enterprise ERP</h3>
                <span class="p-client">Premier Switch Solution S.C</span>
            </div>
            <div class="p-body">
                <p>Custom Odoo integration for Ethiopia's leading banking switch. We automated internal audit trails and financial reporting modules.</p>
                <span class="p-tech">Odoo • Python • Banking</span>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="bg-alt">
    <div class="contact-container">
        <?php if($message_sent): ?>
            <div class="success-msg">Thank you! Your proposal has been submitted.</div>
        <?php endif; ?>
        <h2>Start Your Transformation</h2>
        <form action="index.php#contact" method="POST" class="contact-form">
            <div class="form-row">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Business Email" required>
            </div>
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" rows="5" placeholder="Project Details..."></textarea>
            <button type="submit" class="btn-submit">SUBMIT PROPOSAL</button>
        </form>
    </div>
</section>
<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-col brand-col">
            <a href="index.php" class="logo-link">
            <img src="/images/logo7.png" alt="SolTech Logo" class="logo-img">
        </a> 
            <p>Advancing enterprise efficiency through expert ERP implementation and bespoke software engineering. We transform complex business needs into seamless digital realities.</p>
            <div class="social-links">
                <a href="https://www.linkedin.com/in/solomon-alehgn-2033362a1/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://t.me/solomon123123" aria-label="Telegram"><i class="fab fa-telegram-plane"></i></a>
                <a href="#" aria-label="facebook"><i class="fab fa-x-facebook"></i></a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#about">Corporate Profile</a></li>
                <li><a href="#services">Specialized Services</a></li>
                <li><a href="#portfolio">Project Excellence</a></li>
                <li><a href="#process">Our Methodology</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Corporate Office</h4>
            <ul class="contact-details">
                <li><i class="fas fa-map-marker-alt"></i> Addis Ababa, Ethiopia</li>
                <li><i class="fas fa-envelope"></i> Solomonalehgn8@gmail.com </li>
                <li><i class="fas fa-phone-alt"></i> +251 925837291</li>
                <li><i class="fas fa-clock"></i> Mon - Sat: 8:30 AM - 5:30 PM</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="bottom-container">
            <p>&copy; <?php echo date("Y"); ?> SolTech PLC. All rights reserved.</p>
            <div class="footer-legal">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
<script src="script.js"></script>
</body>
</html>