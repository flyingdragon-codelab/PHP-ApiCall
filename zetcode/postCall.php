<?php

$ch = curl_init('https://prod-10.southeastasia.logic.azure.com:443/workflows/f676cf614d3b4b4bb76ffeaa8a827a42/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=B3TMdVfXLU4fGz8G0WwUZ5kNbeSDYoYuWFfaW5uDiOo');
 
$fields = json_encode(['name' => 'John Doe', 'occupation' => 'gardener']);
$options = [CURLOPT_POST => true, CURLOPT_POSTFIELDS => $fields, 
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'], 
    CURLOPT_RETURNTRANSFER => true];
 
curl_setopt_array($ch, $options); 
 
$data = curl_exec($ch);
curl_close($ch);
 
echo $data;
