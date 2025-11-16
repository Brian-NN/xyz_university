<?php
$host = "localhost";
$dbname = "university"; 
$username = "root";     
$password = "";        

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("Database connection failed: " . $e->getMessage());
}

$uploadDir = __DIR__ . "/ADMIN/uploads/"; 
$webPath = "uploads/";           

if(!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

function uploadFile($fileInput){
    global $uploadDir, $webPath;
    if(isset($_FILES[$fileInput]) && $_FILES[$fileInput]['error'] == 0){
        $filename = time() . "_" . basename($_FILES[$fileInput]['name']);
        $target = $uploadDir . $filename;
        if(move_uploaded_file($_FILES[$fileInput]['tmp_name'], $target)){
            return $webPath . $filename; 
        }
    }
    return null;
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$county = $_POST['county'];
$town = $_POST['town'];
$program = $_POST['program'];
$level = $_POST['level'];
$intake = $_POST['intake'];
$education = $_POST['education'];
$institution = $_POST['institution'];
$completion_year = $_POST['completion_year'];
$grade = $_POST['grade'];
$guardian_name = $_POST['guardian_name'];
$guardian_phone = $_POST['guardian_phone'];
$guardian_relation = $_POST['guardian_relation'];
$message = $_POST['message'];

$kcse = uploadFile('kcse');
$birth_cert = uploadFile('birth_cert');
$id_doc = uploadFile('id_doc');
$photo = uploadFile('photo');

$sql = "INSERT INTO admissions 
(first_name,last_name,dob,gender,phone,email,county,town,program,level,intake,education,institution,completion_year,grade,kcse,birth_cert,id_doc,photo,guardian_name,guardian_phone,guardian_relation,message)
VALUES 
(:first_name,:last_name,:dob,:gender,:phone,:email,:county,:town,:program,:level,:intake,:education,:institution,:completion_year,:grade,:kcse,:birth_cert,:id_doc,:photo,:guardian_name,:guardian_phone,:guardian_relation,:message)";

$stmt = $conn->prepare($sql);

try {
    $stmt->execute([
        ':first_name'=>$first_name,
        ':last_name'=>$last_name,
        ':dob'=>$dob,
        ':gender'=>$gender,
        ':phone'=>$phone,
        ':email'=>$email,
        ':county'=>$county,
        ':town'=>$town,
        ':program'=>$program,
        ':level'=>$level,
        ':intake'=>$intake,
        ':education'=>$education,
        ':institution'=>$institution,
        ':completion_year'=>$completion_year,
        ':grade'=>$grade,
        ':kcse'=>$kcse,
        ':birth_cert'=>$birth_cert,
        ':id_doc'=>$id_doc,
        ':photo'=>$photo,
        ':guardian_name'=>$guardian_name,
        ':guardian_phone'=>$guardian_phone,
        ':guardian_relation'=>$guardian_relation,
        ':message'=>$message
    ]);

    echo "<!DOCTYPE html>
<html>
<head>
    <title>Application Submitted</title>
    <style>
        body{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;background:#f5f7fb;text-align:center;padding:50px;}
        .success-box{background:white;display:inline-block;padding:40px;border-radius:12px;box-shadow:0 5px 20px rgba(0,0,0,0.08);}
        a{color:#1d6af2;text-decoration:none;font-weight:bold;margin-top:20px;display:inline-block;}
        a:hover{color:#f9c80e;}
    </style>
</head>
<body>
    <div class='success-box'>
        <h2>Application submitted successfully!</h2>
        <p>Thank you, $first_name $last_name. We will contact you soon.</p>
        <a href='index.php'>Back to Home</a>
    </div>
</body>
</html>";

} catch(PDOException $e){
    die("Error: " . $e->getMessage());
}
?>