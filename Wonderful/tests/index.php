<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="responsehere"></div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    $.ajax({
        url : 'dataset.php',
        success : function (res){
           console.log(res)
        }
    })
</script>

</html> -->

<?php

// $dbHost     = "corporate.vip1.noc401.com";
// $dbUsername = "bimashco_main";
// $dbPassword = "wDnd+?rjdfb3";
// $dbName     = "bimashco_chatapp";

// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// // Check connection
// if ($db->connect_error) {
//     die("Connection failed: " . $db->connect_error);
// }
// $fe = "SELECT  * FROM answers";
//       $result = $db->query($fe);
//       $data = [];
//       if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             $newans = str_replace(',' , '&#x2c;' , $row['answer']);
//             $id = $row['id'];
//            echo $row['id'].'</br>';
//             $sql = "UPDATE `answers` SET `answer`= '$newans' WHERE id='$id' ";
//             if($db->query($sql)){}
            
//     }
// }


?>