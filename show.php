
<?php
define('LINE_API',"https://notify-api.line.me/api/notify");
 
$token = "S4hSzyNalrSO4e2T3sPi92ka90zYlUDgYNM2ymlipDK"; //ãÊèToken ·Õècopy àÍÒäÇé

$str = "Hello"; //¢éÍ¤ÇÒÁ·ÕèµéÍ§¡ÒÃÊè§ ÊÙ§ÊØ´ 1000 µÑÇÍÑ¡ÉÃ
 
$res = notify_message($str,$token);
print_r($res);

function notify_message($message,$token){
 $queryData = array('message' => $message);
 $queryData = http_build_query($queryData,’’,’&’);
 $headerOptions = array( 
         ‘http’=>array(
            ‘method’=>’POST’,
            ‘header’=> “Content-Type: application/x-www-form-urlencoded\r\n”
                      .”Authorization: Bearer “.$token.”\r\n”
                      .”Content-Length: “.strlen($queryData).”\r\n”,
            ‘content’ => $queryData
         ),
 );
 $context = stream_context_create($headerOptions);
 $result = file_get_contents(LINE_API,FALSE,$context);
 $res = json_decode($result);
 return $res;
}
