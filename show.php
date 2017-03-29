
<?php
require_once './vendor/autoload.php';
$token = 'LINE_NOTIFY_TOKEN';
$ln = new KS\Line\LineNotify($token);
$text = ' Hi'; // Line Notify บังคับให้ใส่ข้อความ แต่อยากส่งแแต่รูปภาพเลยใส่ space ไว้
$image_path = '/screen.png'; //Line notify allow only jpeg and png file
$ln->send($text, $image_path);