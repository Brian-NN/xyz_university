<?php
session_start();

// Database connection
$host = "localhost";
$dbname = "university";
$dbuser = "root";
$dbpass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("Database connection failed: " . $e->getMessage());
}

$username = $_POST['username'];
$password = $_POST['password'];

// Fetch admin from database
$stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
$stmt->execute([$username]);
$admin = $stmt->fetch(PDO::FETCH_ASSOC);

if($admin && password_verify($password, $admin['password'])){
    $_SESSION['admin_name'] = $admin['full_name'];
    header("Location: view_admissions.php");
    exit;
} else {
    $_SESSION['login_error'] = "Invalid username or password";
    header("Location: login.php");
    exit;
}
?>
