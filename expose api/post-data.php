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
 
$bodyfields = file_get_contents('php://input');
$options = [
    CURLOPT_POST => true, 
    CURLOPT_POSTFIELDS => $bodyfields, 
    CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'email: '.$headers['email']), 
    CURLOPT_RETURNTRANSFER => true
    ];
 
curl_setopt_array($ch, $options); 
 
$data = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
curl_close($ch);
 
header('Content-type: application/json');
http_response_code($status);
echo $data;