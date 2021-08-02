<?php
$headers = apache_request_headers();

//echo "$headers";

/*
foreach ($headers as $header => $value) {
    echo "$header: $value \n";
}


echo "\n".'The value in name header is = '.$headers['name'];
*/


$ch = curl_init('https://prod-09.southeastasia.logic.azure.com:443/workflows/01dc89a82684408a8078a10fd3c49053/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=exRlWCFp7i4ReZObPRRpqOMw-YqAbZ8TibZ5sxwC7Ek');
 
$fields = json_encode(['name' => 'John Doe', 'occupation' => 'gardener']);
$options = [CURLOPT_POST => true, CURLOPT_POSTFIELDS => $fields, 
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'], 
    CURLOPT_HTTPHEADER => ['email: '.$headers['email']], 
    CURLOPT_RETURNTRANSFER => true];
 
curl_setopt_array($ch, $options); 
 
$data = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
curl_close($ch);
 
http_response_code($status);
echo $data;