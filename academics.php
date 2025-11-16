<?php include 'header.php'; ?>

<main>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            margin: 0;
            background-color: #f9f9f9;
            line-height: 1.6;
        }

        .academics-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url('images/learning.jpeg') center/cover no-repeat;
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

        .academics-section {
            padding: 80px 20px;
            max-width: 1200px;
            margin: auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.4rem;
            color: #003366;
            margin-bottom: 15px;
            font-weight: 700;
            letter-spacing: -0.5px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #ffcc00;
            border-radius: 2px;
        }

        .section-title p {
            color: #555;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 25px auto 0;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 35px;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .card-image {
            overflow: hidden;
            position: relative;
            height: 200px;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card:hover img {
            transform: scale(1.08);
        }

        .card-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content h3 {
            margin-top: 0;
            color: #003366;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .card-content p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .programs, .research, .resources {
            background: #fff;
            margin-top: 60px;
            padding: 70px 40px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.06);
            position: relative;
        }

        .programs::before, .research::before, .resources::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #003366, #ffcc00);
            border-radius: 12px 12px 0 0;
        }

        .programs h3, .research h3, .resources h3 {
            color: #003366;
            font-size: 1.8rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .programs p, .research p {
            color: #555;
            line-height: 1.7;
            font-size: 1.05rem;
            margin-bottom: 25px;
        }

        .programs ul, .resources ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .programs ul li, .resources ul li {
            background: #f4f6f9;
            padding: 14px 18px;
            margin-bottom: 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
            border-left: 4px solid #003366;
            display: flex;
            align-items: center;
        }

        .programs ul li::before, .resources ul li::before {
            content: '✓';
            color: #003366;
            font-weight: bold;
            margin-right: 10px;
        }

        .programs ul li:hover, .resources ul li:hover {
            background: #eaf0ff;
            transform: translateX(5px);
        }

        .cta-section {
            text-align: center;
            background: linear-gradient(135deg, #003366 0%, #002244 100%);
            color: #fff;
            padding: 90px 20px;
            margin-top: 80px;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.05)"/></svg>');
            background-size: cover;
        }

        .cta-section h2 {
            font-size: 2.4rem;
            margin-bottom: 20px;
            font-weight: 700;
            position: relative;
        }

        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            font-weight: 300;
        }

        .cta-section a {
            background: #ffcc00;
            color: #003366;
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            position: relative;
            font-size: 1.1rem;
            box-shadow: 0 4px 15px rgba(255, 204, 0, 0.3);
            letter-spacing: 0.5px;
        }

        .cta-section a:hover {
            background: #ffd633;
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(255, 204, 0, 0.4);
        }

        @media (max-width: 992px) {
            .academics-hero h1 {
                font-size: 2.8rem;
            }
            
            .section-title h2 {
                font-size: 2.1rem;
            }
        }

        @media (max-width: 768px) {
            .academics-hero {
                padding: 80px 20px;
            }
            
            .academics-hero h1 {
                font-size: 2.3rem;
            }
            
            .academics-hero p {
                font-size: 1.1rem;
            }
            
            .academics-section {
                padding: 60px 20px;
            }
            
            .programs, .research, .resources {
                padding: 50px 25px;
            }
            
            .cta-section {
                padding: 70px 20px;
            }
            
            .cta-section h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .card-grid {
                grid-template-columns: 1fr;
            }
            
            .academics-hero h1 {
                font-size: 2rem;
            }
        }
    </style>

    <section class="academics-hero">
        <h1>Academics at XYZ University</h1>
        <p>Explore our wide range of faculties and programs that empower you to shape the future through knowledge and innovation.</p>
    </section>

    <section class="academics-section">
        <div class="section-title">
            <h2>Our Faculties & Schools</h2>
            <p>Explore the diversity of disciplines that define our academic excellence.</p>
        </div>

        <div class="card-grid">
            <div class="card" id="engineering">
                <div class="card-image">
                    <img src="images/eng.jpeg" alt="Engineering">
                </div>
                <div class="card-content">
                    <h3>School of Engineering</h3>
                    <p>Offering programs in Civil, Mechanical, Electrical, and Software Engineering with a focus on hands-on innovation.</p>
                </div>
            </div>

            <div class="card" id="business">
                <div class="card-image">
                    <img src="images/biz.jpeg" alt="Business">
                </div>
                <div class="card-content">
                    <h3>School of Business</h3>
                    <p>Developing business leaders with programs in Accounting, Finance, Marketing, and Entrepreneurship.</p>
                </div>
            </div>

            <div class="card" id="arts">
                <div class="card-image">
                    <img src="images/arts.jpeg" alt="Arts and Sciences">
                </div>
                <div class="card-content">
                    <h3>Faculty of Arts & Sciences</h3>
                    <p>Home to Social Sciences, Humanities, and Natural Sciences programs that nurture creativity and critical thinking.</p>
                </div>
            </div>

            <div class="card" id="medicine">
                <div class="card-image">
                    <img src="images/med.jpeg" alt="Medicine">
                </div>
                <div class="card-content">
                    <h3>School of Medicine</h3>
                    <p>Equipping healthcare professionals with practical and research-driven medical education.</p>
                </div>
            </div>

            <div class="card" id="law">
                <div class="card-image">
                    <img src="images/law.jpeg" alt="Law">
                </div>
                <div class="card-content">
                    <h3>School of Law</h3>
                    <p>Shaping future lawyers and policymakers through strong foundations in ethics, justice, and governance.</p>
                </div>
            </div>

            <div class="card" id="education">
                <div class="card-image">
                    <img src="images/edu.jpeg" alt="Education">
                </div>
                <div class="card-content">
                    <h3>School of Education</h3>
                    <p>Training educators and researchers dedicated to excellence and equity in education.</p>
                </div>
            </div>

            <div class="card" id="ict">
                <div class="card-image">
                    <img src="images/scit.jpeg" alt="ICT">
                </div>
                <div class="card-content">
                    <h3>School of IT</h3>
                    <p>Advancing digital transformation through programs in Information Technology, Computer Science, and Cybersecurity.</p>
                </div>
            </div>

            <div class="card" id="agriculture">
                <div class="card-image">
                    <img src="images/arg.jpeg" alt="Agriculture">
                </div>
                <div class="card-content">
                    <h3>School of Agriculture</h3>
                    <p>Promoting sustainable farming and agribusiness through scientific research and innovation.</p>
                </div>
            </div>

            <div class="card" id="environment">
                <div class="card-image">
                    <img src="images/envir.jpeg" alt="Environmental Studies">
                </div>
                <div class="card-content">
                    <h3>School of Environmental Studies</h3>
                    <p>Fostering environmental stewardship and sustainable development through research and education.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="programs academics-section">
        <h3>Undergraduate & Postgraduate Programs</h3>
        <p>XYZ University offers a range of accredited programs designed to prepare you for success in your chosen field.</p>
        <ul>
            <li>Bachelor’s Degrees – 4-year programs in various fields</li>
            <li>Master’s Degrees – Advanced studies with research opportunities</li>
            <li>Doctorate Programs – Pioneering innovation through academic research</li>
            <li>Diploma & Certificate Courses – Skill-focused short programs</li>
        </ul>
    </section>

    <section class="research academics-section">
        <h3>Research & Innovation</h3>
        <p>XYZ University is committed to pushing the boundaries of knowledge through research centers, innovation hubs, and partnerships with industry. Students and faculty collaborate on projects addressing real-world challenges in technology, health, and sustainability.</p>
    </section>

    <section class="resources academics-section">
        <h3>Student Resources</h3>
        <ul>
            <li>Digital Library & Research Databases</li>
            <li>Modern Laboratories & Workshops</li>
            <li>Academic Advising & Mentorship</li>
            <li>Internships & Career Placement Support</li>
            <li>Student Innovation Hub & Clubs</li>
        </ul>
    </section>

    <section class="cta-section">
        <h2>Join Our Academic Community</h2>
        <p>Take the next step toward your future. Apply today and be part of XYZ University's legacy of excellence.</p>
        <a href="admissions_form.php" target="_blank">Apply Now</a>
    </section>
</main>

<?php include 'footer.php'; ?>