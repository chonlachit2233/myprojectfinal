<?php session_start();
include("../include/config.php");
error_reporting(0);

if ($_SESSION['user_type']==1) {
    header('location:logout.php');
}else{
    if(isset($_POST['update'])){
        $eid = $_POST['eid'];
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $usermobile = $_POST['usermobile'];
        $loginpassword = $_POST['loginpassword'];

        $hasedpassword = hash('sha256', $loginpassword);
        //print_r($_POST);
        $sql ="UPDATE userdata SET fullname=:fullname,
        username=:username,
        useremail=:useremail,
        usermobile=:usermobile,
        loginpassword=:hasedpassword WHERE id=:eid";


        $query = $dbh->prepare($sql);
        $query->bindParam(':eid',$eid,PDO::PARAM_STR);
        $query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
        $query->bindParam(':username',$username,PDO::PARAM_STR);
        $query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
        $query->bindParam(':usermobile',$usermobile,PDO::PARAM_STR);
        $query->bindParam(':hasedpassword',$hasedpassword,PDO::PARAM_STR);
        $query->execute();
        echo '
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
     
        if($query){
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
       
   }
}    
    
?>





