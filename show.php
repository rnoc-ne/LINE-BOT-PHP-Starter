
<?php
require_once './vendor/autoload.php';
$token = 'LINE_NOTIFY_TOKEN';
$ln = new KS\Line\LineNotify($token);
$text = ' Hi'; // Line Notify �ѧ�Ѻ�������ͤ��� ����ҡ������ٻ�Ҿ������ space ���
$image_path = '/screen.png'; //Line notify allow only jpeg and png file
$ln->send($text, $image_path);