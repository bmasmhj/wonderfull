<?php

if(isset($_GET['location'])){
// $con = mysqli_connect('localhost','root','','test'); 
$con = mysqli_connect('sql208.epizy.com','epiz_27295478','iDJW2MLry5','epiz_27295478_db_passion_seekers'); 

   $loc = base64_encode($_GET['location']);
   $sql = "UPDATE count SET `location` = '$loc'";
   $result = $con->query($sql);
   if($result){
    }
      
}

?>