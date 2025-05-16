<?php

$url = "https://moneypower.hn-crm.com/api/external/integration/lead";

$rawData = file_get_contents('php://input');
$data = json_decode($rawData, true);

$keitId = $_COOKIE['subid'];
$apiKey = $data['key'];

header('Content-Type: application/json; charset=utf-8');

$post_data = array(
    "affc" => "AFF-" . $data['affc'],
    "bxc" => "BX-" . $data['bxc'],
    "vtc" => "VT-HP8XSRMKVS6E7",
    "profile" => array(
        "firstName" => $data['first_name'],
        "lastName" => $data['last_name'],
        "email" => $data['email'],
        "password" => $data['password'],
        "phone" => $data['phone']
    ),
    "ip" => $_SERVER['REMOTE_ADDR'],
    "funnel" => $data['landing'],
    "landingURL" => "https://" . $data['landing'] . ".com",
    "geo" => $data['country_code'],
    "lang" => "EN",
    "landingLang" => "EN",
    "subId" => $keitId,
    "subId_a" => $data['subId_a']
);

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

$crm_response = curl_exec($curl);
curl_close($curl);

// Логирование crm_response в отдельный файл
$crm_log_entry = "[" . date('Y-m-d H:i:s') . "]\n";
$crm_log_entry .= "CRM Response:\n" . ($crm_response !== false ? $crm_response : 'No response') . "\n";
$crm_log_entry .= "--------------------------\n";

file_put_contents(__DIR__ . '/crm_response_log.txt', $crm_log_entry, FILE_APPEND);

$leads_url = 'http://212.113.116.221/5a6c01d/postback';
$params = [
    'subid'       => $keitId,
    'status'      => 'lead',
    'sub_id_20'   => $data['first_name'],
    'sub_id_21'   => $data['last_name'],
    'sub_id_23'   => $data['email'],
    'sub_id_24'   => $data['phone']
];

$full_url = $leads_url . '?' . http_build_query($params);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $full_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
$curl_error = curl_error($ch);

curl_close($ch);

$log_entry = "[" . date('Y-m-d H:i:s') . "]\n";
$log_entry .= "Request URL: " . $full_url . "\n";
$log_entry .= "Response: " . ($response !== false ? $response : 'No response') . "\n";
if ($curl_error) {
    $log_entry .= "cURL Error: " . $curl_error . "\n";
}
$log_entry .= "--------------------------\n";

file_put_contents(__DIR__ . '/postback_log.txt', $log_entry, FILE_APPEND);

echo $crm_response;
