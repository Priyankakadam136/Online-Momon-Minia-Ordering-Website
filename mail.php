<?php
$url = 'https://rest.nexmo.com/sms/json?' . http_build_query([
        'api_key' => 6b5a45ab,
        'api_secret' => Lq40BBTPZ83K5V49,
        'to' => '9967107737',
        'from' => NEXMO_NUMBER,
        'text' => 'Hello from Nexmo'
    ]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
?>