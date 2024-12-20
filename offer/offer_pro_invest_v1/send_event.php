<?php
// Получение данных из POST-запроса
$data = json_decode(file_get_contents("php://input"), true);

// Проверяем, что данные переданы корректно
if (!$data || !isset($data['appsflyer_id']) || !isset($data['advertising_id']) || !isset($data['eventValue']) || !isset($data['eventName'])) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid input"]);
    exit;
}

// Данные для отправки
$requestData = json_encode([
    "appsflyer_id" => $data['appsflyer_id'],
    "advertising_id" => $data['advertising_id'],
    "eventValue" => $data['eventValue'],
    "eventName" => $data['eventName']
]);

// Настройки cURL
$url = "https://api3.appsflyer.com/inappevent/com.inveanst.litka";
$headers = [
    "Accept: application/json",
    "Content-Type: application/json",
    "Authentication: 9e86db3d-e6fc-42c2-a055-093501a141e1",
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

// Выполнение запроса
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Проверка ответа
if ($httpCode >= 200 && $httpCode < 300) {
    http_response_code(200);
    echo json_encode(["success" => true, "response" => $response]);
} else {
    http_response_code($httpCode);
    echo json_encode(["error" => "Failed to send event", "response" => $response]);
}