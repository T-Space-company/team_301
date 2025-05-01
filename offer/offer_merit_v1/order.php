<?php

$url = "https://moneypower.hn-crm.com/api/external/integration/lead";


$rawData = file_get_contents('php://input');
$data = json_decode($rawData, true);

$apiKey = $data['key'];

header('Content-Type: application/json; charset=utf-8');

// Структура тела запроса
$post_data = array(
    "affc" => "AFF-" . $data['affc'],
    "bxc" => "BX-" . $data['bxc'],
    "vtc" => "VT-HP8XSRMKVS6E7",
    "profile" => array(
        "firstName" => $data['first_name'],
        "lastName" => $data['last_name'],
        "email" => $data['email'],
        "password" => $data['password'], // убедитесь, что поле есть
        "phone" => $data['phone']
    ),
    "ip" => $_SERVER['REMOTE_ADDR'],
    "funnel" => $data['landing'],
    "landingURL" => "https://" . $data['landing'] . ".com",
    "geo" => $data['country_code'], // При необходимости можно сделать динамически
    "lang" => "AE",
    "landingLang" => "AE",
    "subId" => $_COOKIE['subid']
);
$leads_data = 'https://' . $_SERVER['HTTP_HOST'] . '/5a6c01d/postback?subid=' . $_COOKIE['subid'] . '&status=lead&sub_id_20=' . $data['first_name'] . '&sub_id_21=' . $data['last_name'] . '&sub_id_23=' . $data['email'] . '&sub_id_24=' . $data['phone']; 
file_get_contents($leads_data);

$json_data = json_encode($post_data);

$headers = array(
    "Content-Type: application/json",
    "x-api-key: $apiKey"
);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);
curl_close($curl);

echo $response;
