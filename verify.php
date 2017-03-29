<?php
$access_token = 'lmDflC804HfDMESt7elcodTAwK5NqBsxKS7DTl9YhZ7aHxS09g+UJB1dPxm5i45p+2wYgUFahKYhC2bgveZvq1GvxloXl3IgGNZCRnjSSSLail7bDPZsXJ3sF1IXdxcaK04MRK5lM0SCP4GRu9zxfgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

