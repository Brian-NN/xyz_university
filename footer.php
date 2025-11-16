<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

<footer class="footer">
  <style>
    .footer {
      background: #0a2342;
      color: #fff;
      padding: 4rem 0 2rem;
      font-family: "Poppins", sans-serif;
    }

    .footer .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      margin-bottom: 2rem;
    }

    .footer-column h3 {
      font-size: 1.2rem;
      margin-bottom: 1rem;
      color: #f9c80e;
    }

    .footer-column p, address {
      color: #ddd;
      line-height: 1.6;
      font-size: 0.95rem;
    }

    .footer-links {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-links li {
      margin-bottom: 0.5rem;
    }

    .footer-links a {
      text-decoration: none;
      color: #ddd;
      transition: color 0.3s ease;
    }

    .footer-links a:hover {
      color: #f9c80e;
    }

    .social-links {
      display: flex;
      gap: 0.8rem;
      margin-top: 1rem;
    }

    .social-link {
      font-size: 1.5rem;
      color: #f9c80e;
      text-decoration: none;
      transition: transform 0.3s ease, color 0.3s ease;
    }

    .social-link:hover {
      color: #fff;
      transform: scale(1.1);
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      text-align: center;
      padding-top: 1.5rem;
    }

    .footer-bottom p {
      margin: 0;
      font-size: 0.9rem;
      color: #bbb;
    }

    @media (max-width: 768px) {
      .footer { text-align: center; }
      .social-links { justify-content: center; }
    }
    .footer-column address i {
  color: #f9c80e; /* accent color */
  margin-right: 8px;
}

  </style>

  <div class="container">
    <div class="footer-grid">
      <div class="footer-column">
        <h3>About XYZ University</h3>
        <p>Dedicated to excellence in teaching, research, and community engagement since 1950.</p>
        <div class="social-links">
          <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
        </div>
      </div>

      <div class="footer-column">
        <h3>Quick Links</h3>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="academics.php">Programs</a></li>
          <li><a href="admissions.php">Admissions</a></li>
          <li><a href="news.php">News & Events</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Academics</h3>
        <ul class="footer-links">
          <li><a href="academics.php#engineering">Engineering</a></li>
          <li><a href="academics.php#business">Business</a></li>
          <li><a href="academics.php#arts">Arts & Sciences</a></li>
          <li><a href="academics.php#medicine">Medicine</a></li>
          <li><a href="academics.php#law">Law</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Contact Us</h3>
        <address>
          <p><i class="fas fa-map-marker-alt"></i> Kiharu, Murang'a, Kenya</p>
          <p><i class="fas fa-phone-alt"></i> +254 712 345 678</p>
          <p><i class="fas fa-envelope"></i> info@xyzuniversity.ac.ke</p>
        </address>
      </div>

    </div>

    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> XYZ University. All rights reserved.</p>
    </div>
  </div>
</footer>
