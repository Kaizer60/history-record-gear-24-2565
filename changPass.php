<?php
    session_start();

    //เชื่อมต่อฐานข้อมูล
    require('dbconnect.php');

    if($_SESSION['checkLogin'] != 0){
        $id = $_SESSION['idS'];

        $sql = "SELECT * FROM student WHERE id='$id'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_row($result);
    }else{
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เปลี่ยนรหัสผ่าน</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
        <div class="container my-3">
            <h2 class="text-center">เปลี่ยนรหัสผ่าน</h2>
            <form action="changPassData.php" method="POST">
                <div class="from-group">
                    <label for="pass">รหัสผ่านใหม่</label>
                    <input type="text" name="pass" id="" class="form-control my-2">
                </div>
                <input type="submit" value="บันทึกรหัสผ่าน" class="btn btn-success">
                <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
            </form>
        </div>
</body>
</html>