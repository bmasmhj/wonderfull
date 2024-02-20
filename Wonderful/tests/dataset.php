<?php
// Database configuration
$dbHost     = "corporate.vip1.noc401.com";
$dbUsername = "bimashco_main";
$dbPassword = "wDnd+?rjdfb3";
$dbName     = "bimashco_chatapp";
// $con = mysqli_connect('localhost','bimashco_discord','L9fWvqR@TMFUkVQ','bimashco_discord');
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$returns = '';
$json = '';
$json .= '{"name":"Mamamiya","locale": "en-US","data":[';

$query = $db->query("
  SELECT
    CONCAT(d.name, '.', i.name) AS intent,
    GROUP_CONCAT(DISTINCT u.utterance SEPARATOR ', ') AS utterances,
    GROUP_CONCAT(DISTINCT a.answer SEPARATOR ', ') AS answers
  FROM
    domains d
    JOIN intent i ON i.domain_id = d.id
    LEFT JOIN utterances u ON u.domain_id = d.id AND u.intent_id = i.id
    LEFT JOIN answers a ON a.domain_id = d.id AND a.intent_id = i.id
  GROUP BY
    intent
");
if ($query->num_rows > 0) {
    $r = $query->num_rows;
    $k = 0;
  while ($row = $query->fetch_assoc()) {
    $k ++ ;
    $intent = $row['intent'];
    $utterances = explode(', ', $row['utterances']);
    $answers = explode(', ', $row['answers']);
    $result = [
      'intent' => $intent,
      'utterances' => $utterances,
      'answers' => $answers,
    ];
    $returns .= json_encode($result);
    if($r > $k ){
        $returns.= ",";
    }
  }
}
$json .= $returns;
$json .=  ']}';

   echo str_replace(',,' , ',' , $json);


?>