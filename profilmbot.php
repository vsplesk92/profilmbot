<?php


$botToken = "184934299:AAHZblySTWCGDiUeCoLOqoehp0FP0x-NeyE";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");

$updateArray = json_decode ($update, TRUE);

$chatId = $updateArray ["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chat_id."&text=ass");



?>
