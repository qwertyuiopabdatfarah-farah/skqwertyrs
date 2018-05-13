<?php
$userkey = "hglrnq";
$passkey = "saleh123Q";
$url = "https://reguler.zenziva.net/apps/smsapibalance.php";
$curlHandle = curl_init();
curl_setopt($curlHandle, CURLOPT_URL, $url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey);
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
curl_setopt($curlHandle, CURLOPT_POST, 1);
$results = curl_exec($curlHandle);
curl_close($curlHandle);

print_r($results); exit();

//https://reguler.zenziva.net/apps/profile.php
//https://reguler.zenziva.net/
////https://reguler.zenziva.net/apps/smsapibalance.php?userkey=$userkeyanda&passkey=$passkeyanda
?>


