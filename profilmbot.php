<?php

ini_set('error_reporting', E_ALL);

$botToken = "184934299:AAHZblySTWCGDiUeCoLOqoehp0FP0x-NeyE";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");
$update = json_decode ($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

switch($message) {
  
  case "/random":
    sendMessage($chatId,"test");
    break;
  
  
}

function sendMessage ($chatId,$message) {
  
  $url = $GLOBALS[website]."sendMessage?chat_id".$chatid."&text".urlencode($message);
  file_get_contents;
}




?>
