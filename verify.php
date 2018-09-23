<?php
$access_token = 'yKcQEnQ2du585lD1l6X3ofyJQr5IkgSMsviy9ZIfgmvIwpvMblMelalzrhVMFNrQU4N96lfMqFtBqbhjJ4jx8EagxdxDNP71eG22KxEQOuvquQ18S/5F3XqI3ih1WdJtj2Zyk6sAJFqqS8RLXL9n4AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
