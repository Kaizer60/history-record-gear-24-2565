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
    <title>My Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    
        <div class="container my-3">
            <h2 class="text-center">My Information</h2>
            <form action="loginData.php" method="POST">
                <h2>รหัสนิสิต : <?php echo $row[0] ?></h2>
                <h2>รหัสผ่าน : <?php echo $row[1] ?></h2>
                <h2>ชื่อ : <?php echo $row[2] ?></h2>
                <h2>นามสกุล : <?php echo $row[3] ?></h2>
                <h2>อีเมล : <?php echo $row[4] ?></h2>
                <h2>เบอร์ติดต่อ : <?php echo $row[5] ?></h2>
                <h2>บริษัท : <?php echo $row[6] ?></h2>
                <h2>อาชีพ : <?php echo $row[7] ?></h2>
                <h2>ตำแหน่ง : <?php echo $row[8] ?></h2>
                <h2>info : <?php echo $row[9] ?></h2>
                <a href="search.php" class="btn btn-warning">ค้นหา</a>
                <a href="editForm.php" class="btn btn-success">แก้ไขข้อมูล</a>
                <a href="changPass.php" class="btn btn-secondary">เปลี่ยนรหัสผ่าน</a>
                <a href="showdata.php" class="btn btn-primary">ข้อมูลทั้งหมด</a>
                <a href="logout.php" class="btn btn-danger">ออกจากระบบ</a>
            </form>
        </div>
</body>
</html>