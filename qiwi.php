<?php

// Get token here - https://qiwi.com/api
$token = '';
// Number phone your wallet without +
$wallet = '';

// Settings cURL
$ch = curl_init('https://edge.qiwi.com/payment-history/v1/persons/'.$wallet.'/payments?rows=2&operation=IN');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json','Content-Type: application/json','Authorization: Bearer '.$token));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Get data
$response = curl_exec($ch);

$response = json_decode($response, true);

echo '<pre>';
print_r($response);
echo '</pre>';

?>