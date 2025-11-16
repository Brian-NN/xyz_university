<?php 
$pageTitle = "News & Updates";
include 'header.php';
?>

<style>

:root {
    --primary: #0a2342;
    --accent: #1d6af2;
    --light-bg: #f7f9fc;
    --text-dark: #222;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     ackground-color: var(--light-bg);
}

.news-hero {
    background: linear-gradient(rgba(10,35,66,0.7), rgba(10,35,66,0.7)), url('images/newshero.jpeg') center/cover no-repeat;
    color: #fff;
    text-align: center;
    padding: 100px 20px;
}
.news-hero h1 {
    font-size: 3rem;
    font-weight: 700;
}
.news-hero p {
    font-size: 1.2rem;
    opacity: 0.9;
}

.news-filters {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    margin: 40px auto 30px;
}
.news-filters button {
    background: #fff;
    border: 1px solid var(--accent);
    color: var(--accent);
    padding: 10px 20px;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s;
}
.news-filters button.active,
.news-filters button:hover {
    background: var(--accent);
    color: #fff;
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

.news-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.3s ease;
}
.news-card:hover {
    transform: translateY(-5px);
}
.news-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}
.news-content {
    padding: 20px;
}
.news-content h3 {
    font-size: 1.2rem;
    color: var(--primary);
    margin-bottom: 10px;
}
.news-content p {
    font-size: 0.95rem;
    color: #555;
    margin-bottom: 15px;
}
.news-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.85rem;
    color: #777;
}
.news-meta span.category {
    background: var(--accent);
    color: #fff;
    padding: 4px 10px;
    border-radius: 15px;
}

@media(max-width:768px){
    .news-hero h1 { font-size: 2.2rem; }
}
</style>

<section class="news-hero">
    <h1>News & Updates</h1>
    <p>Stay informed with the latest happenings, events, and announcements from our university.</p>
</section>

<div class="news-filters">
    <button class="filter-btn active" data-filter="all">All</button>
    <button class="filter-btn" data-filter="academics">Academics</button>
    <button class="filter-btn" data-filter="student-life">Student Life</button>
    <button class="filter-btn" data-filter="achievements">Achievements</button>
    <button class="filter-btn" data-filter="events">Events</button>
    <button class="filter-btn" data-filter="announcements">Announcements</button>
</div>

<div class="news-grid">

    <div class="news-card" data-category="academics">
        <img src="images/news.jpeg" alt="Academic Update">
        <div class="news-content">
            <h3>Engineering Faculty Launches New AI Program</h3>
            <p>The university introduces a new Artificial Intelligence major designed for the future of tech innovation.</p>
            <div class="news-meta">
                <span>Oct 25, 2025</span>
                <span class="category">Academics</span>
            </div>
        </div>
    </div>

    <div class="news-card" data-category="student-life">
        <img src="images/news.jpeg" alt="Student Life">
        <div class="news-content">
            <h3>Students Celebrate Cultural Week in Style</h3>
            <p>A week-long celebration showcasing diverse student talent, traditions, and creativity.</p>
            <div class="news-meta">
                <span>Oct 18, 2025</span>
                <span class="category">Student Life</span>
            </div>
        </div>
    </div>

    <div class="news-card" data-category="achievements">
        <img src="images/news.jpeg" alt="Achievements">
        <div class="news-content">
            <h3>University Team Wins National Robotics Challenge</h3>
            <p>Our students continue to excel nationally, winning the 2025 Innovation Robotics Championship.</p>
            <div class="news-meta">
                <span>Sep 29, 2025</span>
                <span class="category">Achievements</span>
            </div>
        </div>
    </div>

    <div class="news-card" data-category="events">
        <img src="images/news.jpeg" alt="Events">
        <div class="news-content">
            <h3>Upcoming Career Fair — Meet Top Employers</h3>
            <p>Join us for a day of networking and career opportunities with leading industry partners.</p>
            <div class="news-meta">
                <span>Nov 5, 2025</span>
                <span class="category">Events</span>
            </div>
        </div>
    </div>

    <div class="news-card" data-category="announcements">
        <img src="images/news.jpeg" alt="Announcements">
        <div class="news-content">
            <h3>Notice: Semester 2 Registration Now Open</h3>
            <p>All continuing students are advised to complete online registration before November 10th, 2025.</p>
            <div class="news-meta">
                <span>Oct 26, 2025</span>
                <span class="category">Announcements</span>
            </div>
        </div>
    </div>

</div>

<script>

const filterButtons = document.querySelectorAll('.filter-btn');
const newsCards = document.querySelectorAll('.news-card');

filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        // Remove active class from all
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.getAttribute('data-filter');

        newsCards.forEach(card => {
            const category = card.getAttribute('data-category');
            if (filter === 'all' || category === filter) {
                card.style.display = 'block';
                card.style.opacity = 1;
            } else {
                card.style.display = 'none';
                card.style.opacity = 0;
            }
        });
    });
});
</script>

<?php include 'footer.php'; ?>
