<?php 

if(isset($_GET['i'])){
    $i = $_GET['i'];
    $n = $i+1;
    $p = $i-1;
}else {
    $i = 1;
    $n = 2;
    $p = 0;
}

echo ' <img loading="lazy" style="width:100%" src="Output/'.$i.'.Jpeg" alt="" />';


?>
<link rel="stylesheet" href="https://bimash.com.np/Game/assets/css/style.css">

<div class=" mt-5">
<div class="card">
    <div class="card-body">
        <?php
              
                if( $n > 2 ){
                    echo '<a class="btn btn-info mb-3" href="?i='.$p.'"><h1> < Prev</h1></a> ';
                }
               echo' <a download class="text-center btn btn-info mb-3 " href="Output/'.$i.'.Jpeg"><h1>Download </h1></a> ';
                
                if($p<179){
                    echo '<a class="btn btn-info mb-3 float-end" href="?i='.$n.'"><h1>Next > </h1></a>';

                }
                ; ?>
    </div>
</div>
</div>
