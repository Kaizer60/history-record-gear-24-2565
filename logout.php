<?php
session_start();

//เมื่อมีการออกจากระบบ ปรับให้ค่าเป็น 0 เพื่อไว้สำหรับเช็ค log out
$_SESSION['checkLogin'] = 0;

//ให้ไปทำงานที่หน้า log in
header("Location: login.php");
exit;
?>