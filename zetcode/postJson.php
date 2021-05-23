<?php

$ch = curl_init('http://httpbin.org/post');
 
$fields = json_encode(['name' => 'John Doe', 'occupation' => 'gardener']);
$options = [CURLOPT_POST => true, CURLOPT_POSTFIELDS => $fields, 
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'], 
    CURLOPT_RETURNTRANSFER => true];
 
curl_setopt_array($ch, $options); 
 
$data = curl_exec($ch);
curl_close($ch);
 
echo $data;
