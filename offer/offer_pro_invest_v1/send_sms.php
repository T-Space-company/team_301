<?php
$logFile = __DIR__ . '/sms_log.txt';
date_default_timezone_set('Europe/Moscow');
$currentHour = (int)date('H');

if (isset($_GET['number'])) {
    $number = $_GET['number'];
    if ($number === '79995599681') {
        echo "Отправка SMS на этот номер запрещена";
        exit;
    }

    $message = ($currentHour >= 8 && $currentHour < 19)
        ? "Спасибо за регистрацию! Специалист свяжется с Вами в ближайшее время!"
        : "Заявка принята! Мы свяжемся с Вами в рабочее время, ожидайте.";

    $apiUrl = "https://api.zmtech.ru:7778/v1/neutral";
    $apiKey = "44180dffde44839a74aebb6677a995e195a18e8b";
    $requestData = [
        "id" => "118240",
        "password" => $apiKey,
        "pack" => [
            [
                "phone" => $number,
                "message" => $message,
            ]
        ]
    ];

    $options = [
        'http' => [
            'header' => "Content-Type: application/json\r\n",
            'method' => 'POST',
            'content' => json_encode($requestData)
        ]
    ];
    $context = stream_context_create($options);
    $date = date('Y-m-d H:i:s');
    $response = file_get_contents($apiUrl, false, $context);

    if ($response === FALSE) {
        $error = error_get_last();
        $logEntry = "$date - Ошибка отправки SMS на номер $number. Ошибка: " . $error['message'] . "\n";
        file_put_contents($logFile, $logEntry, FILE_APPEND);
        echo "Ошибка отправки SMS";
    } else {
        file_put_contents($logFile, "$date - Ответ от API: $response\n", FILE_APPEND);
        $responseData = json_decode($response, true);

        // Проверяем наличие ключа "id" в первом элементе ответа
        if (is_array($responseData) && isset($responseData[0]['id'])) {
            $logEntry = "$date - SMS успешно отправлено на номер $number. ID: " . $responseData[0]['id'] . "\n";
            file_put_contents($logFile, $logEntry, FILE_APPEND);
            echo "SMS успешно отправлено";
        } else {
            $logEntry = "$date - Не удалось отправить SMS на номер $number. Ответ: " . json_encode($responseData) . "\n";
            file_put_contents($logFile, $logEntry, FILE_APPEND);
            echo "Не удалось отправить SMS";
        }
    }
} else {
    echo "Параметр number не указан";
}
?>
