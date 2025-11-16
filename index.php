<?php 
$pageTitle = "Home";
include 'header.php';
?>

<style>
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
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #f7f9fc;
  color: #222;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

h1, h2, h3 {
  font-weight: 700;
  margin-bottom: 1rem;
  color: #0a2342;
}

p {
  color: #555;
  line-height: 1.6;
}

.btn {
  display: inline-block;
  padding: 0.8rem 1.6rem;
  border-radius: 30px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  cursor: pointer;
}

.btn-primary {
  background: #0a2342;
  color: #fff;
}

.btn-primary:hover {
  background: #183e73;
}

.btn-secondary {
  background: #f9c80e;
  color: #0a2342;
}

.btn-secondary:hover {
  background: #eab308;
}

.btn-outline {
  border: 2px solid #0a2342;
  color: #0a2342;
}

.btn-outline:hover {
  background: #0a2342;
  color: #fff;
}

.hero {
  margin-top: 70px; 
  background: linear-gradient(rgba(10,35,66,0.6), rgba(10,35,66,0.6)),
              url('images/hero.jpeg') center/cover;
  color: #fff;
  text-align: center;
  padding: 8rem 2rem;
}

.hero h1 {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.hero p {
  font-size: 1.2rem;
  max-width: 750px;
  margin: 0 auto 2rem;
}

.hero-actions a {
  margin: 0 0.5rem;
}

.stats {
  background: #fff;
  padding: 4rem 0;
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 2rem;
  text-align: center;
}

.stat-card {
  background: #f1f5fb;
  padding: 2rem 1rem;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-8px);
}

.stat-number {
  font-size: 2.5rem;
  font-weight: 700;
  color: #0a2342;
}

.stat-label {
  font-size: 1rem;
  color: #555;
  margin-top: 0.5rem;
}

.section {
  padding: 4rem 0;
}

.section-title {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 2.5rem;
  color: #0a2342;
  position: relative;
}

.section-title::after {
  content: '';
  width: 80px;
  height: 4px;
  background: #f9c80e;
  display: block;
  margin: 10px auto 0;
  border-radius: 2px;
}

.news-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 2rem;
}

.news-card {
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.news-card:hover {
  transform: translateY(-6px);
}

.news-image {
  font-size: 3rem;
  text-align: center;
  padding: 2rem 0;
  background: #f0f4fa;
}

.news-content {
  padding: 1.5rem;
}

.news-date {
  color: #999;
  font-size: 0.9rem;
  margin-bottom: 0.5rem;
}

.news-title {
  font-size: 1.3rem;
  color: #0a2342;
  margin-bottom: 0.5rem;
}

.news-excerpt {
  color: #555;
  margin-bottom: 1rem;
}

.fade-in {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.6s ease;
}

.fade-in.visible {
  opacity: 1;
  transform: translateY(0);
}

@media (max-width: 768px) {
  .hero {
    padding: 5rem 1.5rem;
  }

  .hero h1 {
    font-size: 2rem;
  }

  .hero p {
    font-size: 1rem;
  }

  .stats {
    padding: 2rem 0;
  }

  .section {
    padding: 2rem 0;
  }

  .news-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<section class="hero">
  <div class="container">
    <div class="hero-content">
      <h1 style="color:white !important;">Shape Your Future at XYZ University</h1>
      <p style="color:white !important;">Join a community of innovators, thinkers, and leaders dedicated to making a difference in the world through education and research.</p>
      <div class="hero-actions">
        <a href="admissions.php" class="btn btn-secondary">Apply Now</a>
        <a href="about.php" class="btn btn-outline">Learn More</a>
      </div>
    </div>
  </div>
</section>

<section class="stats">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-card fade-in">
        <div class="stat-number" data-target="15000">0</div>
        <div class="stat-label">Students Enrolled</div>
      </div>
      <div class="stat-card fade-in">
        <div class="stat-number" data-target="120">0</div>
        <div class="stat-label">Programs Offered</div>
      </div>
      <div class="stat-card fade-in">
        <div class="stat-number" data-target="95">0</div>
        <div class="stat-label">Graduation Rate (%)</div>
      </div>
      <div class="stat-card fade-in">
        <div class="stat-number" data-target="50">0</div>
        <div class="stat-label">Countries Represented</div>
      </div>
    </div>
  </div>
</section>

<!-- ===== NEWS SECTION ===== -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Latest News & Events</h2>
    <div class="news-grid">
      <?php
      $news = [
        [
          'title' => 'New Research Center Opens',
          'date' => 'Dec 15, 2025',
          'excerpt' => 'State-of-the-art facility for interdisciplinary research in sustainable energy.',
          'image' => '🔬'
        ],
        [
          'title' => 'Annual Career Fair 2025',
          'date' => 'Dec 10, 2025',
          'excerpt' => 'Connect with top employers and explore exciting career opportunities.',
          'image' => '💼'
        ],
        [
          'title' => 'University Rankings Update',
          'date' => 'Dec 5, 2025',
          'excerpt' => 'XYZ University climbs to top 50 in global university rankings.',
          'image' => '🏆'
        ]
      ];

      foreach ($news as $item) {
        echo "
        <article class='news-card fade-in'>
          <div class='news-image'>{$item['image']}</div>
          <div class='news-content'>
            <div class='news-date'>{$item['date']}</div>
            <h3 class='news-title'>{$item['title']}</h3>
            <p class='news-excerpt'>{$item['excerpt']}</p>
            <a href='news.php' class='btn btn-outline'>Read More</a>
          </div>
        </article>
        ";
      }
      ?>
    </div>
    <div style="text-align: center; margin-top: 40px;">
      <a href="news.php" class="btn btn-primary">View All News</a>
    </div>
  </div>
</section>

<script>
const fadeElements = document.querySelectorAll('.fade-in');
function handleScroll() {
  fadeElements.forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 50) {
      el.classList.add('visible');
    }
  });
}
window.addEventListener('scroll', handleScroll);
handleScroll();

const counters = document.querySelectorAll('.stat-number');
counters.forEach(counter => {
  const target = +counter.getAttribute('data-target');
  let count = 0;
  const speed = target / 100;

  const updateCount = () => {
    if (count < target) {
      count += speed;
      counter.textContent = Math.floor(count);
      requestAnimationFrame(updateCount);
    } else {
      counter.textContent = target;
    }
  };
  updateCount();
});
</script>

<?php include 'footer.php'; ?>
