<?php

session_start();
//เชื่อมต่อฐานข้อมูล
require('dbconnect.php');


//รับค่าที่ส่งมาจาก editForm
$id = $_POST["id"];
$pass = $_POST["pass"];

//เรียกข้อมูลจากฐานข้อมูลที่ตรงกับค่าที่ที่เก็บมา
$sql = "SELECT * FROM student WHERE id='$id' AND pass='$pass'";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($result);

//ตรวจสอบว่าข้อมูลมีค่าว่างหรือไม่
if($row > 0){
    $_SESSION['checkLogin'] = 1; //เก็บค่า 1 เพื่อใช้ตรวจสอบว่าทำการล็อกอินหรือยัง
    $_SESSION['idS'] = $id; //เก็บรหัสนิสิต
    $_SESSION['passS'] = $pass;

    /*echo $_SESSION['checkLogin']."<br>";
    echo $_SESSION['idS'];*/

    //ให้ไปทำงานที่หน้า index
    header("Location: index.php");
    exit;
}else{
    $_SESSION['checkLogin'] = 0;
    $_SESSION['idS'] = $id;
    $_SESSION['passS'] = $pass;
    echo "<br>";
    echo "<CENTER>ไม่พบข้อมูลของรหัสนิสิต ".$_SESSION['idS']."</CENTER>";
    echo "<CENTER>โปรดตรวจสอบรหัสนิสิต หรือ รหัสผ่านอีกครั้ง</CENTER>";
}
?>

<!-- ทำปุ่มกลับไปยังหน้า Log in กรณีไม่พบข้อมูล -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-3">
        <a href="login.php" class="btn btn-success">เข้าสู่ระบบ</a>
    </div>
</body>
</html>