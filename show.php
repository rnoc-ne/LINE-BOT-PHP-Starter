
<?php
require_once './vendor/autoload.php';
$token = 'lmDflC804HfDMESt7elcodTAwK5NqBsxKS7DTl9YhZ7aHxS09g+UJB1dPxm5i45p+2wYgUFahKYhC2bgveZvq1GvxloXl3IgGNZCRnjSSSLail7bDPZsXJ3sF1IXdxcaK04MRK5lM0SCP4GRu9zxfgdB04t89/1O/w1cDnyilFU=';
$ln = new KS\Line\LineNotify($token);
$text = ' Hi'; // Line Notify ºÑ§¤ÑºãËéãÊè¢éÍ¤ÇÒÁ áµèÍÂÒ¡Êè§ááµèÃÙ»ÀÒ¾àÅÂãÊè space äÇé
$image_path = '/screen.png'; //Line notify allow only jpeg and png file
$ln->send($text, $image_path);
