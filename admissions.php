<?php 
$pageTitle = "Admissions";
include 'header.php';
?>

<style>

:root {
    --primary: #0a2342;
    --accent: #1d6af2;
    --light: #f5f7fb;
    --white: #fff;
    --text-dark: #1b1b1b;
    --text-light: #555;
    --shadow: 0 5px 20px rgba(0,0,0,0.08);
}

body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

nav a {
  color: var(--white);
}
nav a:hover {
  color: var(--accent);
}

.admissions-page {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: var(--text-dark);
    line-height: 1.6;
    overflow-x: hidden;
}


.hero {
    background: linear-gradient(rgba(10,35,66,0.65), rgba(10,35,66,0.65)), url('images/admission.jpg') center/cover no-repeat;
    color: white;
    text-align: center;
    padding: 120px 20px;
    position: relative;
}
.hero h1 {
    font-size: 3.2rem;
    font-weight: 700;
    margin-bottom: 15px;
}
.hero p {
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto 30px;
}
.hero a {
    background: var(--accent);
    color: white;
    padding: 14px 35px;
    border-radius: 40px;
    text-decoration: none;
    transition: all 0.3s ease;
    font-weight: 500;
}
.hero a:hover {
    background: #1553c1;
    transform: translateY(-2px);
}


.section-title {
    text-align: center;
    margin: 70px 0 30px;
}
.section-title h2 {
    color: var(--primary);
    font-size: 2.2rem;
    font-weight: 700;
}
.section-title p {
    color: var(--text-light);
    font-size: 1rem;
}


.why {
    background: var(--white);
    padding-bottom: 50px;
}
.features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 25px;
    padding: 0 60px;
}
.feature-card {
    background: var(--white);
    border-radius: 15px;
    padding: 30px 25px;
    box-shadow: var(--shadow);
    text-align: center;
    transition: all 0.3s ease;
}
.feature-card:hover {
    transform: translateY(-8px);
}
.feature-card h3 {
    color: var(--accent);
    font-size: 1.3rem;
    margin-bottom: 10px;
}


.steps {
    background: var(--light);
    padding: 60px 40px;
}
.steps ol {
    max-width: 700px;
    margin: auto;
    font-size: 1rem;
    counter-reset: step-counter;
}
.steps ol li {
    background: var(--white);
    border-left: 4px solid var(--accent);
    border-radius: 8px;
    padding: 15px 20px;
    margin-bottom: 15px;
    box-shadow: var(--shadow);
    list-style: none;
    counter-increment: step-counter;
    position: relative;
}
.steps ol li::before {
    content: counter(step-counter);
    background: var(--accent);
    color: white;
    border-radius: 50%;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: -45px;
    top: 15px;
    font-weight: 600;
}

.requirements {
    background: var(--white);
    padding: 60px 40px;
}
.requirements ul {
    max-width: 750px;
    margin: auto;
    background: var(--light);
    padding: 25px 35px;
    border-radius: 12px;
    box-shadow: var(--shadow);
}
.requirements li {
    margin-bottom: 12px;
}


.apply {
    background: var(--light);
    padding: 60px 40px;
}
.apply ul {
    max-width: 750px;
    margin: auto;
    background: var(--white);
    padding: 25px 35px;
    border-radius: 12px;
    box-shadow: var(--shadow);
}
.apply a {
    display: inline-block;
    background: var(--accent);
    color: white;
    padding: 12px 30px;
    border-radius: 30px;
    text-decoration: none;
    margin-top: 25px;
    transition: all 0.3s ease;
}
.apply a:hover {
    background: #144fcc;
    transform: translateY(-3px);
}


.fees {
    background: var(--white);
    padding: 60px 40px;
    text-align: center;
}
.fees p {
    max-width: 650px;
    margin: auto;
}
.fees a {
    display: inline-block;
    background: var(--accent);
    color: white;
    padding: 12px 30px;
    border-radius: 30px;
    text-decoration: none;
    margin-top: 20px;
    transition: 0.3s;
}
.fees a:hover {
    background: #144fcc;
}


.dates {
    background: var(--light);
    padding: 60px 40px;
}
.dates table {
    margin: auto;
    border-collapse: collapse;
    width: 85%;
    background: white;
    border-radius: 12px;
    box-shadow: var(--shadow);
    overflow: hidden;
}
.dates th, .dates td {
    padding: 14px 18px;
    text-align: left;
}
.dates th {
    background: var(--accent);
    color: white;
    text-transform: uppercase;
}
.dates tr:nth-child(even) {
    background: var(--light);
}


.faqs {
    background: var(--white);
    padding: 60px 40px;
}
.faqs details {
    max-width: 750px;
    margin: 12px auto;
    background: var(--light);
    border-radius: 10px;
    padding: 18px 25px;
    box-shadow: var(--shadow);
    transition: all 0.3s ease;
}
.faqs details summary {
    font-weight: 600;
    color: var(--primary);
    cursor: pointer;
}
.faqs details[open] {
    background: var(--accent);
    color: white;
}
.faqs details[open] summary {
    color: white;
}

.contact {
    background: var(--primary);
    color: white;
    text-align: center;
    padding: 70px 30px;
}
.contact a {
    color: #c9d8ff;
    text-decoration: none;
}
.contact a:hover {
    text-decoration: underline;
}
.contact p {
    font-size: 1rem;
    margin-bottom: 8px;
}
</style>

<div class="admissions-page">

    <section class="hero">
        <h1>Admissions</h1>
        <p>Start your academic journey with us. Experience excellence, innovation, and opportunity.</p>
        <a href="admissions_form.php" target="_blank">Apply Now</a>
    </section>

  
    <section class="why">
        <div class="section-title">
            <h2>Why Choose Us</h2>
            <p>Discover what sets our institution apart from the rest.</p>
        </div>
        <div class="features">
            <div class="feature-card">
                <h3>Accredited Programs</h3>
                <p>All programs are fully recognized and meet the highest educational standards.</p>
            </div>
            <div class="feature-card">
                <h3>Experienced Faculty</h3>
                <p>Learn from industry experts and passionate educators committed to your growth.</p>
            </div>
            <div class="feature-card">
                <h3>Modern Facilities</h3>
                <p>Enjoy a modern learning environment with digital tools and research spaces.</p>
            </div>
            <div class="feature-card">
                <h3>Scholarship Support</h3>
                <p>We offer various scholarships and financial aid programs for outstanding students.</p>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="section-title">
            <h2>Admission Process</h2>
        </div>
        <ol>
            <li>Choose your preferred program.</li>
            <li>Check entry requirements for your study level.</li>
            <li>Submit your online application form.</li>
            <li>Pay the application fee.</li>
            <li>Wait for your admission letter or interview notice.</li>
            <li>Confirm admission and complete registration.</li>
        </ol>
    </section>

    <section class="requirements">
        <div class="section-title">
            <h2>Entry Requirements</h2>
        </div>
        <ul>
            <li><strong>Undergraduate:</strong> KCSE Mean Grade C+ and above, with required subject combinations.</li>
            <li><strong>Diploma:</strong> KCSE Mean Grade C- or equivalent qualification.</li>
            <li><strong>Certificate:</strong> KCSE Mean Grade D plain and above.</li>
            <li><strong>Postgraduate:</strong> Bachelor’s degree or equivalent from a recognized institution.</li>
        </ul>
    </section>

    <section class="apply">
        <div class="section-title">
            <h2>How to Apply</h2>
        </div>
        <ul>
            <li>Visit our online application portal.</li>
            <li>Fill in the required details and upload necessary documents.</li>
            <li>Pay the application fee through approved methods.</li>
            <li>Submit and wait for an email confirmation.</li>
        </ul>
        <div style="text-align:center;">
            <a href="admissions_form.php" target="_blank">Start Application</a>
        </div>
    </section>

   <section class="fees">
    <div class="section-title">
        <h2>Fees & Scholarships</h2>
    </div>
    <p>
        We believe in accessible education for all. Explore our affordable fee structure 
        and scholarships designed to reward academic excellence and financial need.
    </p>
    <a href="ADMIN/uploads/fee_structure.docx" download="XYZ_University_Fee_Structure.docx">
        Download Fee Structure
    </a>
</section>


    <section class="dates">
        <div class="section-title">
            <h2>Important Dates</h2>
        </div>
        <table>
            <tr>
                <th>Event</th>
                <th>Date</th>
            </tr>
            <tr>
                <td>Applications Open</td>
                <td>September 1, 2025</td>
            </tr>
            <tr>
                <td>Application Deadline</td>
                <td>November 31, 2025</td>
            </tr>
            <tr>
                <td>Orientation Day</td>
                <td>January 5, 2026</td>
            </tr>
            <tr>
                <td>Semester Begins</td>
                <td>January 5, 2026</td>
            </tr>
        </table>
    </section>

    <section class="faqs">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>
        <details>
            <summary>How do I apply online?</summary>
            <p>Click the “Apply Now” button and complete the online form with your details and attachments.</p>
        </details>
        <details>
            <summary>Can I apply for more than one program?</summary>
            <p>Yes, you can apply for up to two programs during an intake period.</p>
        </details>
        <details>
            <summary>Is there an application fee?</summary>
            <p>Yes. A small non-refundable fee is required for processing your application.</p>
        </details>
    </section>

    <section class="contact">
        <div class="section-title">
            <h2 style="color:white;">Contact Admissions Office</h2>
        </div>
        <p><strong>Phone:</strong> +254 700 123 456</p>
        <p><strong>Email:</strong> <a href="mailto:admissions@xyzuniversity.ac.ke">admissions@xyzuniversity.ac.ke</a></p>
        <p><strong>Office Hours:</strong> Monday – Friday, 8:00 AM – 5:00 PM</p>
    </section>

</div>

<?php include 'footer.php'; ?>
