<?php
    session_start();

    //เชื่อมต่อฐานข้อมูล
    require('dbconnect.php');

    if($_SESSION['checkLogin'] != 0){
        $sql = "SELECT * FROM student";
        $result = mysqli_query($con,$sql);
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
    <div class="container">
        <h2 class="text-center my-2">ข้อมูลนิสิตวิศวกรรมคอมพิวเตอร์ 60</h2>
        <table class="table table-hover my-3">
            <thead>
                <tr class="table-dark">
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>อีเมล</th>
                    <th>เบอร์ติดต่อ</th>
                    <th>อาชีพ</th>
                    <th>ตำแหน่ง</th>
                    <th>บริษัท</th>
                    <th>info</th>
                </tr>
                <tbody>
                <?php while($row = mysqli_fetch_row($result)){?>
                    <tr>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php echo $row[5] ?></td>
                        <td><?php echo $row[6] ?></td>
                        <td><?php echo $row[7] ?></td>
                        <td><?php echo $row[8] ?></td>
                        <td><?php echo $row[9] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </thead>
        </table>
        <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
    </div>
</body>
</html>