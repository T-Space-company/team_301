<?php
// Получение данных из POST-запроса
$data = json_decode(file_get_contents("php://input"), true);

// Проверяем, что данные переданы корректно
if (!$data || !isset($data['appsflyer_id']) || !isset($data['advertising_id']) || !isset($data['eventValue']) || !isset($data['eventName']) || !isset($data['url_tail'])) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid input"]);
    exit;
}

// Данные для отправки
$urlTail = $data['url_tail'];
$requestData = json_encode([
    "appsflyer_id" => $data['appsflyer_id'],
    "advertising_id" => $data['advertising_id'],
    "eventValue" => $data['eventValue'],
    "eventName" => $data['eventName']
]);

// Настройки cURL
$url = "https://api3.appsflyer.com/inappevent/" . $urlTail;
$headers = [
    "Accept: application/json",
    "Content-Type: application/json",
    "Authentication: e959f58b-e719-4ef4-ad9e-deeba43b8767",
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

// Логирование ответа в файл
$logEntry = date('Y-m-d H:i:s') . " | HTTP Code: $httpCode | Response: $response" . PHP_EOL;
file_put_contents('postback_log.txt', $logEntry, FILE_APPEND);

// Проверка ответа
if ($httpCode >= 200 && $httpCode < 300) {
    http_response_code(200);
    echo json_encode(["success" => true, "response" => $response]);
} else {
    http_response_code($httpCode);
    echo json_encode(["error" => "Failed to send event", "response" => $response]);
}
