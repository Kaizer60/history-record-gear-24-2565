<?php
session_start();

//เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

$id =  $_SESSION['idS'];

//รับค่าที่ส่งมาจาก editForm
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$company = $_POST["company"];
$job = $_POST["job"];
$jobtitle = $_POST["jobtitle"];
$info = $_POST["info"];

//$pass = $_POST["pass"];

//บันทึกข้อมูล
$sql = "UPDATE student SET firstname = '$firstname', lastname='$lastname', email='$email', tel='$tel', company='$company', job='$job', jobtitle='$jobtitle',info='$info' WHERE id=$id";

$result = mysqli_query($con,$sql);

if($result){
    header("Location: index.php");
    exit;
}else{
    echo myqli_errors($con);
}
?>