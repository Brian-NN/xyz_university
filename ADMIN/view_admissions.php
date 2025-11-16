<?php
session_start();
if(!isset($_SESSION['admin_name'])){
    header("Location: login.php");
    exit;
}

// DB connection
$conn = new PDO("mysql:host=localhost;dbname=university;charset=utf8","root","");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->query("SELECT * FROM admissions ORDER BY submission_date DESC");
$admissions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Admissions</title>
<style>
:root {
    --primary: #0a2342;
    --accent: #0a2342;
    --light: #f5f7fb;
    --white: #fff;
    --text-dark: #1b1b1b;
    --text-light: #555;
    --shadow: 0 5px 20px rgba(0,0,0,0.08);
}
body{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;background:var(--light);margin:0;padding:0;color:var(--text-dark);}
.navbar{display:flex;justify-content:space-between;padding:15px 30px;background:var(--primary);color:white;align-items:center;}
.navbar a{color:white;text-decoration:none;margin-left:15px;background:#1d6af2;padding:8px 15px;border-radius:5px;transition:background 0.3s;}
.navbar a:hover{background:#f9c80e;color:#0a2342;}
h1{text-align:center;margin:30px 0;color:var(--primary);}
table{width:100%;border-collapse:collapse;background:var(--white);border-radius:10px;overflow:hidden;box-shadow:var(--shadow);margin-bottom:50px;}
th,td{padding:12px 15px;border-bottom:1px solid #ddd;text-align:left;}
th{background:var(--accent);color:white;}
tr:hover{background:#f0f8ff;}
a.download-link{color:var(--primary);text-decoration:none;font-weight:bold;}
a.download-link:hover{text-decoration:underline;}
@media (max-width:768px){
    table,thead,tbody,th,td,tr{display:block;}
    th{display:none;}
    tr{margin-bottom:15px;border:1px solid #ccc;border-radius:10px;padding:10px;background:var(--white);}
    td{display:flex;justify-content:space-between;padding:8px;border:none;}
    td::before{content:attr(data-label);font-weight:bold;color:var(--accent);}
}
</style>
</head>
<body>

<div class="navbar">
    <div>University Admin Panel</div>
    <div>
        Logged in as: <?= htmlspecialchars($_SESSION['admin_name']); ?>
        <a href="logout.php">Logout</a>
    </div>
</div>

<h1>All Admissions</h1>

<?php if(count($admissions) > 0): ?>
<table>
<thead>
<tr>
<th>ID</th>
<th>Applicant</th>
<th>Program</th>
<th>Level</th>
<th>Intake</th>
<th>Email</th>
<th>Phone</th>
<th>Files</th>
<th>Date Submitted</th>
</tr>
</thead>
<tbody>
<?php foreach($admissions as $ad): ?>
<tr>
<td data-label="ID"><?= htmlspecialchars($ad['id']) ?></td>
<td data-label="Applicant"><?= htmlspecialchars($ad['first_name'].' '.$ad['last_name']) ?></td>
<td data-label="Program"><?= htmlspecialchars($ad['program']) ?></td>
<td data-label="Level"><?= htmlspecialchars($ad['level']) ?></td>
<td data-label="Intake"><?= htmlspecialchars($ad['intake']) ?></td>
<td data-label="Email"><?= htmlspecialchars($ad['email']) ?></td>
<td data-label="Phone"><?= htmlspecialchars($ad['phone']) ?></td>
<td data-label="Files">
    <?php if($ad['kcse']): ?><a href="uploads/<?= htmlspecialchars(basename($ad['kcse'])) ?>" target="_blank" class="download-link">KCSE</a><?php else: ?>-<?php endif; ?> |
    <?php if($ad['birth_cert']): ?><a href="uploads/<?= htmlspecialchars(basename($ad['birth_cert'])) ?>" target="_blank" class="download-link">Birth</a><?php else: ?>-<?php endif; ?> |
    <?php if($ad['id_doc']): ?><a href="uploads/<?= htmlspecialchars(basename($ad['id_doc'])) ?>" target="_blank" class="download-link">ID</a><?php else: ?>-<?php endif; ?> |
    <?php if($ad['photo']): ?><a href="uploads/<?= htmlspecialchars(basename($ad['photo'])) ?>" target="_blank" class="download-link">Photo</a><?php else: ?>-<?php endif; ?>
</td>
<td data-label="Date"><?= htmlspecialchars($ad['submission_date']) ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<?php else: ?>
<p style="text-align:center;color:var(--text-light);">No admissions submitted yet.</p>
<?php endif; ?>

</body>
</html>