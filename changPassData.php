<?php
session_start();

//เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

$id =  $_SESSION['idS'];

//รับค่ารหัสผ่านใหม่จาก changPass.php
$pass =  $_POST['pass'];

//บันทึกข้อมูล
$sql = "UPDATE student SET pass = '$pass' WHERE id=$id";

$result = mysqli_query($con,$sql);

if($result){
    header("Location: index.php");
    exit;
}else{
    echo myqli_errors($con);
}
?>