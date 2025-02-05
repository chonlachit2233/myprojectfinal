<?php session_start();
include("../include/config.php");
error_reporting(0);

$cat_id = $_GET['cat_id'];
$quely= $dbh->prepare('DELETE FROM category WHERE cat_id=:cat_id');
$quely->bindParam(':cat_id', $cat_id , PDO::PARAM_INT);
$quely->execute();

echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
 
  if($quely->rowCount() ==1){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "ลบข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "manage_category.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }else{
       echo '<script>
             setTimeout(function() {
              swal({
                  title: "เกิดข้อผิดพลาด",
                  type: "error"
              }, function() {
                  window.location = "manage_category.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
$dbh = null;


?>
