<?php session_start();
include("include/config.php");
error_reporting(0);
 
if (isset($_POST['login'])) {
     $username = $_POST['username'];
     $loginpassword  = $_POST['loginpassword'];
    echo "<br>";
     $hasedpassword = hash('sha256', $loginpassword);
 
    try{
    $ret = "SELECT * FROM userdata WHERE (username=:uname && loginpassword=:loginpassword)";
    $queryt = $dbh->prepare($ret);
    $queryt->bindParam(':uname', $username, PDO::PARAM_STR);
    $queryt->bindParam(':loginpassword', $hasedpassword, PDO::PARAM_STR);
    $queryt->execute();
    $results = $queryt->fetchAll(PDO::FETCH_OBJ);
 
    if ($queryt->rowCount() > 0) {echo 'xxx';
        echo "<script type='text/javascript'>";
        echo "alert('เข้าสู่ระบบเรียบร้อย');";
        echo "document.location='welcome.php';";
        echo "</script>";
    }else{ echo 'asdasda';
        echo "<script type='text/javascript'>";
        echo "alert('username ไม่ถูกหรือ password ไม่ถูกต้อง');";
        echo "document.location='login.php';";
        echo "</script>";
    }
}catch(PDOException $e){
    exit("Error:".$e->getMessage());
}
 
   
}