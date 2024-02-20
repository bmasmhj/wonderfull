<?php
session_start();
$con = mysqli_connect('sql208.epizy.com','epiz_27295478','iDJW2MLry5','epiz_27295478_db_passion_seekers'); 
// $con = mysqli_connect('localhost','root','','test'); 
if(isset($_SESSION['token'])){
    $sql = "SELECT  * FROM count  ";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        echo '<script>window.location="bimash.com.np/404";</script>; ';
    }else {
        
    $sql = "INSERT INTO `count`(`id`, `count`) VALUES ('1','1')";
    $result = $con->query($sql);
    if($result){
        echo '<script>console.log("Loaded successfully");</script>';
    }
    }
}
else {
    $_SESSION['token'] = 'tokentime';
    $sql = "INSERT INTO `count`(`id`, `count`) VALUES ('1','1')";
    $result = $con->query($sql);
    if($result){
        echo '<script>console.log("Loaded successfully");</script>';
    }
}

 ?>