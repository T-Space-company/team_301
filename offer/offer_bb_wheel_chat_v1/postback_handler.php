<?php
// Получение данных из GET-запроса
$dynamicParameter = $_GET['dynamicParameter'] ?? null;
$appId = $_GET['appId'] ?? null;

// Проверка обязательных параметров
if (!$dynamicParameter || !$appId) {
    http_response_code(400);
    echo json_encode(["error" => "Missing required parameters"]);
    exit;
}

// Формирование URL для POST-запроса
$postbackUrl = "http://postback.supersonicads.com/userActivity/custom1?dynamicParameter=$dynamicParameter&src=appmetrica&canClaim=1&appId=$appId&isViewThrough=0&platform=android&advertiserId=354773&Password=b363f161";

// Настройки cURL
$ch = curl_init($postbackUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

// Выполнение запроса
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Логирование ответа
$logData = [
    'timestamp' => date('Y-m-d H:i:s'),
    'url' => $postbackUrl,
    'http_code' => $httpCode,
    'response' => $response,
];
$logFile = __DIR__ . '/postback_log.txt'; // Файл для логов
file_put_contents($logFile, json_encode($logData, JSON_PRETTY_PRINT) . PHP_EOL, FILE_APPEND);

// Проверка ответа
if ($httpCode >= 200 && $httpCode < 300) {
    http_response_code(200);
    echo json_encode(["success" => true, "response" => $response]);
} else {
    http_response_code($httpCode);
    echo json_encode(["error" => "Failed to send postback", "response" => $response]);
}
