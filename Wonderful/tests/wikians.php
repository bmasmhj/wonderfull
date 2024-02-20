<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");



// $next_pl = explode('...' , $plain_text) ;

// echo substr($next_pl[0] , 0 , -1 );
// print_r($im[2]);

// echo $krr.'<br>';

// echo $substring.'<br>';
// echo $next.'<br>' ;
	
// echo strip_tags_content($substring);
$q = $_GET['q'];
$qr = str_replace( ' ' , '+' , $q );
$wik_qr = str_replace( ' ' , '%20' , $q );
$wiki_curl = curl_init();

curl_setopt_array($wiki_curl, array(
  CURLOPT_URL => 'https://api.wikimedia.org/core/v1/wikipedia/en/search/page?q='.$wik_qr.'&limit=10',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

echo '<pre>';
$response = curl_exec($wiki_curl);
curl_close($wiki_curl);
$result = json_decode($response, true);

if(empty($result['pages'])){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://www.google.com/search?q='.$qr,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Cookie: 1P_JAR=2023-02-13-07; AEC=ARSKqsKvNYOI5lyDb_bybu8J_GJ-WyflfyQNfwsD8bfde885fFUDu1g5fg; NID=511=N8vakjSbiyjysC_9BdG2VNJ5lPHxrofltZ2lpAdYbPhUAYglLFey53ziE5bfZkObOA2p2m3evu87EuWX89PZd72dz_9odyIbhUz8FXjnfehGYVlwrIsu98HEneVI32BhKhibBbWOJr6PxLk8QyRdxvt6Ld6BrRRGywy40NEjxoA'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

        $rss = str_replace('<div class="kCrYT">' , '$#_#_#$1' , $response);

      function string_between_two_string($str, $starting_word, $ending_word)
    {
      $subtring_start = strpos($str, $starting_word);
      $subtring_start += strlen($starting_word);
      $size = strpos($str, $ending_word, $subtring_start) - $subtring_start;
      return substr($str, $subtring_start, $size);
    }



    // $substring = string_between_two_string($krr, '$#_#_#$1', '$#_#_#$2');
    $im = explode('$#_#_#$1',$rss);


    $plain_text = strip_tags($im[1]);
    echo $plain_text;
}else{
    print_r($result['pages'][0]['title'].' : '.$result['pages'][0]['excerpt'].'. '.$result['pages'][0]['description']);
}


?>