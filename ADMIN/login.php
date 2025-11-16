<?php
session_start();
if(isset($_SESSION['admin_name'])){
    header("Location: view_admissions.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<style>
body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background:#f5f7fb; margin:0; padding:0; }
.login-container { max-width:400px; margin:100px auto; background:white; padding:30px; border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.08);}
h2 { text-align:center; color:#0a2342; }
.form-group { margin-bottom:15px; }
label { display:block; font-weight:bold; margin-bottom:5px; }
input { width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; }
button { width:100%; padding:12px; background:#0a2342; color:white; border:none; border-radius:8px; cursor:pointer; font-size:16px; }
button:hover { background:#1d6af2; }
.error { color:red; margin-bottom:15px; text-align:center; }
</style>
</head>
<body>
<div class="login-container">
    <h2>Admin Login</h2>
    <p>Username and password have been input for presentation purposes</p>
    <?php
    if(isset($_SESSION['login_error'])){
        echo '<div class="error">'.$_SESSION['login_error'].'</div>';
        unset($_SESSION['login_error']);
    }
    ?>
    <form action="login_process.php" method="POST">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" value="admin" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="admin123" required>
        </div>

        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
