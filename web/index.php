<?php 
// Роутинг!!!
$url = $_SERVER['REQUEST_URI'];

if($url == '/glavni') {
    require "../index.php"; exit;
} elseif($url == '/web/contact') {
    echo "подкючен файл contact.php"; exit;
}

echo "404 | ERROR";
