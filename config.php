<?php
$servername = "localhost";
$username = "root";  // ชื่อผู้ใช้สำหรับ XAMPP คือ root
$password = "";  // ไม่มีรหัสผ่านโดยปกติ
$dbname = "zgameofficial_db";  // ชื่อฐานข้อมูลที่สร้างใน phpMyAdmin

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// เช็คการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}
// echo "เชื่อมต่อฐานข้อมูลสำเร็จ"; // สำหรับการทดสอบ
?>
