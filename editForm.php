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
    <title>แก้ไขข้อมูลนิสิต</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    
        <div class="container my-3">
            <h2 class="text-center">แก้ไขข้อมูล</h2>
            <form action="updateData.php" method="POST">
                <div class="from-group">
                    <label for="firstname">ชื่อ</label>
                    <input type="text" name="firstname" id="" class="form-control my-2" value=<?php echo $row[2] ?>>
                </div>
                
                <div class="from-group">
                    <label for="lastname">นามสกุล</label>
                    <input type="text" name="lastname" id="" class="form-control my-2" value=<?php echo $row[3] ?>>
                </div>

                <div class="from-group">
                    <label for="email">email</label>
                    <input type="text" name="email" id="" class="form-control my-2" value=<?php echo $row[4] ?>>
                </div>

                <div class="from-group">
                    <label for="tel">เบอร์ติดต่อ</label>
                    <input type="text" name="tel" id="" class="form-control my-2" value=<?php echo $row[5] ?>>
                </div>

                <div class="from-group">
                    <label for="company">ชื่อบริษัท</label>
                    <input type="text" name="company" id="" class="form-control my-2" value=<?php echo $row[6] ?>>
                </div>

                <div class="from-group">
                    <label for="job">อาชีพ</label>
                    <input type="text" name="job" id="" class="form-control my-2" value=<?php echo $row[7] ?>>
                </div>

                <div class="from-group">
                    <label for="jobtitle">ตำแหน่ง</label>
                    <input type="text" name="jobtitle" id="" class="form-control my-2" value=<?php echo $row[8] ?>>
                </div>

                <div class="from-group">
                    <label for="info">เพิ่มเติม</label>
                    <input type="text" name="info" id="" class="form-control my-2" value=<?php echo $row[9] ?>>
                </div>
                <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
                <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
            </form>
        </div>
    
</body>
</html>