<?php

$url = "https://api.space-crm.com/leads/new?apiKey=nlRmZslSGKRSfptp4yHJ";
$post = $_POST; // Получение всех данных из POST

header('Content-Type: application/json; charset=utf-8');

$post_data = array(
  "name" => $post['firstName'],
  "surname" => $post['lastName'],
  "phoneNumber"=> $post['phoneNumber'],
  "desc" => $post['answers'],
  "landing" => $post['landing'],
  "language" => $post['language'],
  "ip" => $_SERVER['REMOTE_ADDR'],
  "source" => $post['source'],
  "userId" => $post['utm_medium'],
  "campaign" => $post['campaing_id'],
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

$rawResult = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); // Получение статуса HTTP-ответа от удаленного сервера

curl_close($curl);

// Проверка статуса HTTP-ответа и его обработка
if ($httpCode >= 500) {
    $leads_data = 'https://' . $_SERVER['HTTP_HOST'] . '/4834956/postback?subid=' . $_COOKIE['subid'] . '&status=lead&sub_id_20=' . $post_data['name'] . '&sub_id_21=' . $post_data['surname'] . '&sub_id_23=' . $post_data['phoneNumber'] . '&sub_id_24=' . $post_data['status'] . '&sub_id_25=' . 'failed'; 
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

