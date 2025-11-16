<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php 
$pageTitle = "Contact";
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $success = true;
    
    if ($success) {
        $notification = "<div class='notification success'>
            Thank you for your message! We'll get back to you soon.
        </div>";
    } else {
        $notification = "<div class='notification error'>
            There was an error sending your message. Please try again.
        </div>";
    }
}
?>

<style>

:root {
    --primary: #0a2342;
    --accent: #1d6af2;
    --light: #f9f9f9;
    --gray: #777;
    --success: #28a745;
    --border-radius: 10px;
    --shadow: 0 4px 10px rgba(0,0,0,0.08);
    --transition: 0.3s ease;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     background: #f7f9fc;
}

.section {
    padding: 80px 20px;
    background: var(--light);
}

.container {
    max-width: 1200px;
    margin: auto;
}

.section-title {
    text-align: center;
    color: var(--primary);
    font-size: 2.2rem;
    margin-bottom: 40px;
    font-weight: 700;
}

.notification {
    text-align: center;
    padding: 15px;
    border-radius: var(--border-radius);
    margin-bottom: 30px;
    font-weight: 500;
}

.notification.success {
    background: var(--success);
    color: white;
}

.notification.error {
    background: #dc3545;
    color: white;
}

.contact-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: start;
}

.contact-form form {
    background: white;
    padding: 30px;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
}

.contact-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--primary);
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: var(--border-radius);
    font-size: 1rem;
    transition: var(--transition);
}

.contact-form input:focus,
.contact-form textarea:focus {
    outline: none;
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(29,106,242,0.1);
}

.contact-form button {
    background: var(--accent);
    color: white;
    padding: 14px;
    border: none;
    border-radius: var(--border-radius);
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    width: 100%;
    transition: var(--transition);
}

.contact-form button:hover {
    background: #0f55d3;
}

.contact-info {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.contact-info .info-card {
    background: white;
    padding: 30px;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
}

.contact-info h3 {
    color: var(--primary);
    margin-bottom: 20px;
}

.info-item {
    display: flex;
    align-items: start;
    gap: 15px;
    margin-bottom: 20px;
    font-size: 1rem;
}

.info-item div strong {
    display: block;
    color: var(--primary);
}

.map {
    width: 100%;
    height: 300px;
    border-radius: var(--border-radius);
    overflow: hidden;
    box-shadow: var(--shadow);
}

.map iframe {
    width: 100%;
    height: 100%;
    border: 0;
    border-radius: var(--border-radius);
}

@media (max-width: 900px) {
    .contact-container {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .map {
        height: 250px;
    }
}
.info-item i {
    font-size: 1.5rem;
    color: #0a2342;
    margin-right: 10px;
}
.info-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

</style>

<section class="section">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        
        <?php if (isset($notification)) echo $notification; ?>
        
        <div class="contact-container">
            <!-- Contact Form -->
            <div class="contact-form">
                <form method="POST" action="">
                    <div>
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div>
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div>
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    
                    <div>
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit">Send Message</button>
                </form>
            </div>
            
            <div class="contact-info">


            <div class="info-card"> 
                <h3>Get in Touch</h3>
                
                <div class="info-item">
                    <div><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <strong>Main Campus</strong>
                        Kiharu, Murang'a <br>Kenya
                    </div>
                </div>
                
                <div class="info-item">
                    <div><i class="fas fa-phone"></i></div>
                    <div>
                        <strong>Phone</strong>
                        +254 712 345 678
                    </div>
                </div>
                
                <div class="info-item">
                    <div><i class="fas fa-envelope"></i></div>
                    <div>
                        <strong>Email</strong>
                        info@xyzuniversity.com
                    </div>
                </div>
                
                <div class="info-item">
                    <div><i class="fas fa-clock"></i></div>
                    <div>
                        <strong>Office Hours</strong>
                        Monday - Friday: 8:00 AM - 6:00 PM
                    </div>
                </div>
            </div>


                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.938150884715!2d37.147559139585525!3d-0.71902591580401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18289874dd56f1a5%3A0xed3b1918af62f2cd!2sKiharu%2C%20Murang&#39;a!5e1!3m2!1sen!2ske!4v1760779240271!5m2!1sen!2ske" 
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
