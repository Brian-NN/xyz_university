<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>XYZ University</title>

  <style>
    /* ===== GLOBAL STYLES ===== */
    :root {
      --primary-color: #0a2342;
      --accent-color: #f9c80e;
      --text-light: #ffffff;
      --text-muted: #cccccc;
      --font-body: 'Inter', sans-serif;
      --font-heading: 'Playfair Display', serif;
    }

    body {
      margin: 0;
      font-family: var(--font-body);
      color: #222;
      line-height: 1.6;
      background-color: #f8f9fa;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
    }

    /* ===== TOP ALERT BAR ===== */
    .top-alert {
      background: var(--accent-color);
      color: #000;
      padding: 0.5rem 0;
      text-align: center;
      font-size: 0.95rem;
      font-weight: 500;
    }

    .top-alert a {
      color: var(--primary-color);
      font-weight: 600;
      margin-left: 0.5rem;
    }

    /* ===== HEADER & NAVIGATION ===== */
    header {
      background: var(--primary-color);
      color: var(--text-light);
      padding: 1rem 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
    }

    .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-family: var(--font-heading);
      font-size: 1.5rem;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .logo span {
      color: var(--accent-color);
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
      margin: 0;
      padding: 0;
    }

    nav a {
      color: var(--text-light);
      font-weight: 500;
      transition: color 0.3s ease;
    }

    nav a:hover,
    nav a.active {
      color: var(--accent-color);
    }

    /* ===== HAMBURGER MENU ===== */
    .menu-toggle {
      display: none;
      font-size: 1.8rem;
      cursor: pointer;
      color: var(--text-light);
    }

    /* ===== MOBILE RESPONSIVE ===== */
    @media (max-width: 768px) {
      nav ul {
        display: none;
        flex-direction: column;
        background: var(--primary-color);
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        text-align: center;
        border-top: 1px solid rgba(255,255,255,0.2);
      }

      nav ul.show {
        display: flex;
      }

      .menu-toggle {
        display: block;
      }
    }
  </style>
</head>
<body>

  <!-- Top Alert Bar -->
  <div class="top-alert">
    <div class="container">
      <p>🚀 Applications for January intake are now open!
        <a href="admissions_form.php" target="_blank" class="alert-link">Apply Now →</a>
      </p>
    </div>
  </div>

  <!-- Header & Navigation -->
  <header>
    <div class="container nav-container">
      <div class="logo">🎓 <span>XYZ</span> University</div>
      
      <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

      <nav>
        <ul id="nav-menu">
          <li><a href="index.php" class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Home</a></li>
          <li><a href="about.php" class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">About</a></li>
          <li><a href="academics.php" class="<?php echo ($currentPage == 'academics.php') ? 'active' : ''; ?>">Academics</a></li>
          <li><a href="admissions.php" class="<?php echo ($currentPage == 'admissions.php') ? 'active' : ''; ?>">Admissions</a></li>
          <li><a href="news.php" class="<?php echo ($currentPage == 'news.php') ? 'active' : ''; ?>">News</a></li>
          <li><a href="contact.php" class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
      </nav>

      <div class="menu-toggle" id="menu-toggle">☰</div>
    </div>
  </header>

  <script>
    // ===== HAMBURGER TOGGLE FUNCTIONALITY =====
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');

    menuToggle.addEventListener('click', () => {
      navMenu.classList.toggle('show');
    });
  </script>
