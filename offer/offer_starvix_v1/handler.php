<?php
// Включить CORS при необходимости
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Прочитать входящий JSON
$data = json_decode(file_get_contents("php://input"), true);

// Проверка на ошибки
if (!$data) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid input"]);
    exit;
}

// Подготовить данные для Google Apps Script
$payload = json_encode($data);

// URL скрипта Google Apps Script (уже опубликован как веб-приложение)
$url = "https://script.google.com/macros/s/AKfycbxJPjvhh8LDk4uJ9ohn4J4juK-PMS06Tm6eRLySSbE2f5aHwY-7tATf2iizhuyW6uZo/exec";

// Отправка запроса через cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);
curl_close($ch);

// Ответ пользователю
echo json_encode(["status" => "ok", "response" => $response]);