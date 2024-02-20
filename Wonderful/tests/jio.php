<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://prod.media.jio.com/proxy?video_id=2000141257');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'OPTIONS');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: prod.media.jio.com';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8';
$headers[] = 'Access-Control-Request-Headers: devicetype,os,secversion,ssotoken,uniqueid,usergroup,x-apisignatures,x-feature-code,x-token-platform';
$headers[] = 'Access-Control-Request-Method: POST';
$headers[] = 'Origin: https://www.jiocinema.com';
$headers[] = 'Referer: https://www.jiocinema.com/';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Hola/1.206.374';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);



?>