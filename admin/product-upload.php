<?php session_start();
include("../include/config.php");
error_reporting(0);

echo '<pre>';
print_r($_FILES);
echo '</pre>';

$dir = "./include/uploads";
$fileImage = $dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)){
    echo"ไฟล์ภาพชื่อ". basename($_FILES["file"]["name"]) ."อัพโหลดรูปภาพเสร็จเเล้ว";

}else{
    echo "เกิดข้อผิดพลาด";
}
?>