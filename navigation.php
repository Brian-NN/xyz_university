    <header class="header">
        <div class="container">
            <div class="nav-container">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.php">
                        <div class="logo-icon">🎓</div>
                        <div class="logo-text">
                            <span class="logo-university">XYZ University</span>
                            <span class="logo-tagline">Excellence in Education</span>
                        </div>
                    </a>
                </div>

                <nav class="nav-menu" id="navMenu">
                    <ul class="nav-links">
                        <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                        <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a></li>
                        <li><a href="academics.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'academics.php' ? 'active' : ''; ?>">Academics</a></li>
                        <li><a href="admissions.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'admissions.php' ? 'active' : ''; ?>">Admissions</a></li>
                        <li><a href="news.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'news.php' ? 'active' : ''; ?>">News & Events</a></li>
                        <li><a href="downloads.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'downloads.php' ? 'active' : ''; ?>">Downloads</a></li>
                        <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                    </ul>
                    
                    <div class="nav-actions">
                        <a href="admissions.php#apply" class="btn btn-primary">Apply Now</a>
                        <a href="#" class="btn btn-outline">Student Portal</a>
                    </div>
                </nav>

                <div class="mobile-toggle" id="mobileToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>