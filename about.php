<?php 
$pageTitle = "About";
include 'header.php';
?>

<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f7f9fc;
    margin: 0;
    color: #222;
}

.academics-hero {
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('images/about.jpeg') center/cover no-repeat;
    color: #fff;
    text-align: center;
    padding: 120px 20px;
    position: relative;
}

.academics-hero h1 {
    font-size: 3.2rem;
    margin-bottom: 20px;
    font-weight: 700;
    letter-spacing: -0.5px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.academics-hero p {
    font-size: 1.3rem;
    max-width: 700px;
    margin: 0 auto;
    font-weight: 300;
    line-height: 1.5;
}

.section {
    padding: 4rem 0;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
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


.about-content {
    max-width: 800px;
    margin: 0 auto 60px;
    text-align: center;
}

.about-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444;
}

.mission-vision {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-bottom: 60px;
}

.mission-card,
.vision-card {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.mission-card:hover,
.vision-card:hover {
    transform: translateY(-6px);
}

.mission-card h3,
.vision-card h3 {
    color: #0a2342;
    margin-bottom: 15px;
    font-size: 1.3rem;
}

.leadership-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.leader-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.leader-card:hover {
    transform: translateY(-6px);
}

.leader-image {
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #0a2342, #f9c80e);
}

.leader-image img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
}

.leader-info {
    padding: 25px;
    text-align: center;
}

.leader-info h4 {
    color: #0a2342;
    margin-bottom: 10px;
}

.leader-info p {
    margin-bottom: 8px;
}

.leader-info p:nth-child(2) {
    color: #f9c80e;
    font-weight: 600;
}

.leader-info p:nth-child(3) {
    color: #555;
    font-size: 0.9rem;
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
    .about-content p {
        font-size: 1rem;
    }
    .section-title {
        font-size: 1.7rem;
    }
}
</style>

<section class="academics-hero">
    <h1>About XYZ University</h1>
    <p>At A Glance.</p>
</section>

<section class="section fade-in">
    <div class="container">
        <h2 class="section-title">About XYZ University</h2>
        
        <div class="about-content">
            <p>
                Founded in 1950, XYZ University has been at the forefront of higher education, 
                combining academic excellence with real-world impact. Our commitment to innovation, 
                diversity, and community engagement has made us a leader in preparing students 
                for successful careers and meaningful lives.
            </p>
        </div>

        <div class="mission-vision">
            <div class="mission-card fade-in">
                <h3>🎯 Our Mission</h3>
                <p>To provide transformative education that empowers students to become ethical leaders and innovative problem-solvers in a global society.</p>
            </div>
            <div class="vision-card fade-in">
                <h3>🔭 Our Vision</h3>
                <p>To be a world-class university recognized for excellence in teaching, research, and community engagement.</p>
            </div>
        </div>

        <h3 class="section-title" style="font-size: 2rem;">University Leadership</h3>
        
        <div class="leadership-grid">
            <?php
            $leaders = [
                ['name' => 'Dr. Sarah Johnson', 'position' => 'VC', 'bio' => '20+ years in academic leadership', 'image'=>'images/sarah.jpg'],
                ['name' => 'Prof. Michael Chen', 'position' => 'DVC', 'bio' => 'Expert in educational innovation', 'image'=>'images/michael.jpg'],
                ['name' => 'Dr. Emily Rodriguez', 'position' => 'Dean of Students', 'bio' => 'Student development specialist', 'image'=>'images/emily.jpg'],
                ['name' => 'Mr. David Thompson', 'position' => 'Chief Financial Officer', 'bio' => 'Financial strategy expert', 'image'=>'images/david.jpg']
            ];

            foreach ($leaders as $leader) {
                $imagePath = file_exists($leader['image']) ? $leader['image'] : 'images/placeholder.png';
                echo '
                <div class="leader-card fade-in">
                    <div class="leader-image">
                        <img src="' . htmlspecialchars($imagePath) . '" alt="' . htmlspecialchars($leader['name']) . '">
                    </div>
                    <div class="leader-info">
                        <h4>' . htmlspecialchars($leader['name']) . '</h4>
                        <p>' . htmlspecialchars($leader['position']) . '</p>
                        <p>' . htmlspecialchars($leader['bio']) . '</p>
                    </div>
                </div>
                ';
            }
            ?>
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
</script>

<?php include 'footer.php'; ?>
