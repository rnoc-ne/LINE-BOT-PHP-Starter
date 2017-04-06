
<?php
define('LINE_API',"https://notify-api.line.me/api/notify");
 
$token = "S4hSzyNalrSO4e2T3sPi92ka90zYlUDgYNM2ymlipDK"; //

$str = "Hello"; //

$token = 'YOUR LINE NOTIFY TOKEN';
$ln = new KS\Line\LineNotify($token);

$text = 'Hello Line Notify';
$ln->send($text);



//$text = 'Hello Line Notify';
//$image_path = '/LINE-BOT-PHP-Starter/master/screen.png'; //Line notify allow only jpeg and png file
//$ln->send($text, $image_path);

