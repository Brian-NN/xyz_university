<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions | Online Application</title>

    <style>
        :root {
            --primary: #0a2342;
             --accent: #f9c80e;
            --light: #f5f7fb;
            --white: #ffffff;
            --text-dark: #1b1b1b;
            --text-light: #555;
            --shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--light);
        }

        .admission-section {
            padding: 80px 20px;
        }

        .admission-container {
            max-width: 900px;
            margin: auto;
            background: var(--white);
            padding: 40px;
            border-radius: 16px;
            box-shadow: var(--shadow);
        }

        h2 {
            text-align: center;
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 32px;
        }

        .section-desc {
            text-align: center;
            color: var(--text-light);
            margin-bottom: 40px;
            font-size: 16px;
        }

        h3 {
            margin-top: 30px;
            margin-bottom: 10px;
            color: var(--primary);
            border-left: 4px solid var(--accent);
            padding-left: 10px;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 6px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 14px;
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
            background: var(--white);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--accent);
            box-shadow: 0 0 6px rgba(29,106,242,0.3);
        }

        textarea { resize: vertical; }

        .submit-btn {
            width: 100%;
            padding: 16px;
            background: var(--primary);
            border: none;
            color: var(--white);
            border-radius: 12px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            transition: 0.3s ease;
        }

        .submit-btn:hover {
            background: var(--accent);
        }

        .file-input {
            padding: 12px;
            border: 1px dashed #aaa;
            border-radius: 10px;
            cursor: pointer;
            background: #fafafa;
        }

        .file-input:hover {
            border-color: var(--accent);
        }

        @media (max-width: 768px) {
            .form-row { flex-direction: column; }
        }
    </style>
</head>
<body>

<section class="admission-section">
    <div class="admission-container">

        <h2>Online Admission Application</h2>
        <p class="section-desc">Fill in the form below to apply for your desired program.</p>

        <form action="process_admission.php" method="POST" enctype="multipart/form-data">

            <h3>Personal Details</h3>

            <div class="form-row">
                <div class="form-group">
                    <label>First Name *</label>
                    <input type="text" name="first_name" required>
                </div>

                <div class="form-group">
                    <label>Last Name *</label>
                    <input type="text" name="last_name" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Date of Birth *</label>
                    <input type="date" name="dob" required>
                </div>

                <div class="form-group">
                    <label>Gender *</label>
                    <select name="gender" required>
                        <option disabled selected>Select gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        
                    </select>
                </div>
            </div>


            <h3>Contact Information</h3>

            <div class="form-row">
                <div class="form-group">
                    <label>Phone Number *</label>
                    <input type="text" name="phone" required>
                </div>

                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>County *</label>
                    <input type="text" name="county" required>
                </div>

                <div class="form-group">
                    <label>Town / Estate</label>
                    <input type="text" name="town">
                </div>
            </div>


            <h3>Program Selection</h3>

            <div class="form-row">
                <div class="form-group">
                    <label>Program of Interest *</label>
                    <select name="program" required>
                        <option disabled selected>Select Program</option>
                        <option>Computer Science</option>
                        <option>Information Technology</option>
                        <option>Business Management</option>
                        <option>Hospitality</option>
                        <option>Cybersecurity</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Level of Study *</label>
                    <select name="level" required>
                        <option disabled selected>Select Level</option>
                        <option>Certificate</option>
                        <option>Diploma</option>
                        <option>Degree</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Preferred Intake *</label>
                    <select name="intake" required>
                        <option disabled selected>Select Intake</option>
                        <option>January</option>
                        <option>May</option>
                        <option>September</option>
                    </select>
                </div>
            </div>


            <h3>Academic Background</h3>

            <div class="form-row">
                <div class="form-group">
                    <label>Highest Education Level *</label>
                    <select name="education" required>
                        <option disabled selected>Select Level</option>
                        <option>KCSE</option>
                        <option>Diploma</option>
                        <option>Degree</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Institution Attended *</label>
                    <input type="text" name="institution" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Year of Completion *</label>
                    <input type="text" name="completion_year" required>
                </div>

                <div class="form-group">
                    <label>Grade Attained *</label>
                    <input type="text" name="grade" required>
                </div>
            </div>


            <h3>Upload Documents</h3>

            <div class="form-row">
                <div class="form-group">
                    <label>KCSE Certificate / Results Slip *</label>
                    <input type="file" name="kcse" class="file-input" required>
                </div>

                <div class="form-group">
                    <label>Birth Certificate *</label>
                    <input type="file" name="birth_cert" class="file-input" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>National ID / Passport *</label>
                    <input type="file" name="id_doc" class="file-input" required>
                </div>

                <div class="form-group">
                    <label>Passport Photo *</label>
                    <input type="file" name="photo" class="file-input" accept="image/*" required>
                </div>
            </div>


            <h3>Parent / Guardian Information</h3>

            <div class="form-row">
                <div class="form-group">
                    <label>Guardian Name *</label>
                    <input type="text" name="guardian_name" required>
                </div>

                <div class="form-group">
                    <label>Guardian Phone *</label>
                    <input type="text" name="guardian_phone" required>
                </div>
            </div>

            <div class="form-group">
                <label>Guardian Relationship *</label>
                <input type="text" name="guardian_relation" required>
            </div>


            <h3>Additional Message (optional)</h3>
            <div class="form-group">
                <textarea name="message" placeholder="Write any additional notes..." rows="4"></textarea>
            </div>


            <div class="form-group" style="margin-top: 15px;">
                <label>
                    <input type="checkbox" required>
                    I confirm that the information provided is accurate.
                </label>
            </div>

            <button type="submit" class="submit-btn">Submit Application</button>

        </form>
    </div>
</section>

</body>
</html>
