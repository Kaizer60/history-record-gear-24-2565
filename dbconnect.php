<?php

$con = mysqli_connect("localhost","root","","cpe_gear24");

/* Check connection
if (!$con) {
    die("Connection failed" . mysqli_connect_error());
} */
if (!$con) {
    echo "เชื่อมต่อไม่สำเร็จ";
}

?>