<?php

$url = "https://api.space-crm.com/leads/new?apiKey=PfjzvQsfAyuZEyg";
// $post = $_POST; // Получение всех данных из POST

$rawData = file_get_contents('php://input');
$data = json_decode($rawData, true);

header('Content-Type: application/json; charset=utf-8');

$post_data = array(
  "name" => $data['first_name'],
  "surname" => $data['last_name'],
  "phoneNumber"=> $data['phone'],
  "desc" => "",
  "comment" => "",
  "landing" => $data['landing'],
  "currency" => "RUB",
  "language" => "RU",
  "ip" => $_SERVER['REMOTE_ADDR'],
  "timezone" => "",
  "source" => $data['source'],
  "useragent" => "",
  "userId" => $data['utm_medium'],
  "country" => "RU",
  "campaign" => $data['campaing_id'],
  "clickId" => $_COOKIE['subid']
);


$json_data = json_encode($post_data);

$headers = array(
    "Content-Type: application/json"
);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);

curl_close($curl);
echo $response;

// Проверка статуса HTTP-ответа и его обработка
if ($httpCode >= 500) {
    $leads_data = 'https://' . $_SERVER['HTTP_HOST'] . '/33157d8/postback?subid=' . $_COOKIE['subid'] . '&status=lead&sub_id_20=' . $post_data['name'] . '&sub_id_21=' . $post_data['surname'] . '&sub_id_23=' . $post_data['phoneNumber'] . '&sub_id_24=' . $post_data['status'] . '&sub_id_25=' . 'failed'; 
    file_get_contents($leads_data);
} elseif ($httpCode === 401) {
    http_response_code(401); // Установка кода статуса ответа для клиента
    echo json_encode(array('error' => 'Unauthorized')); // Отправка сообщения об ошибке в формате JSON
} elseif ($httpCode === 400) {
    http_response_code(400); // Установка кода статуса ответа для клиента
    echo json_encode(array('error' => 'Bad Request')); // Отправка сообщения об ошибке в формате JSON
} else {
    // Отправка данных в формате JSON клиенту
    echo $rawResult;
}


?>
