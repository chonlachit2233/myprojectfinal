<?php session_start();
include("../include/config.php");
error_reporting(0);

//ประกาศตัวเเปรรับค่าจากฟอร์ม
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$usermobile = $_POST['usermobile'];
$loginpassword = $_POST['loginpassword'];

// sql insert
$quley = $dbh->prepare("INSERT INTO userdata (fullname,username,useremail,usermobile,loginpassword) VALUE (:fullname,:username,:useremail,:usermobile,:loginpassword)");
$quley->bindParam(':fullname',$fullname, PDO::PARAM_STR);
$quley->bindParam(':username',$username, PDO::PARAM_STR);
$quley->bindParam(':useremail',$useremail, PDO::PARAM_STR);
$quley->bindParam(':usermobile',$usermobile, PDO::PARAM_STR);
$quley->bindParam(':loginpassword',$loginpassword, PDO::PARAM_STR);
$quley->execute();

//ปุ่ม sweet alert
echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
 
    if($quley){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "เพิ่มข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "manage_user.php"; //หน้าที่ต้องการให้กระโดดไป
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
                  window.location = "manage_user.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
    $dbh = null; //close connect db
   
?>