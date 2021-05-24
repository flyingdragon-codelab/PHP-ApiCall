<?php

$ch = curl_init('https://prod-31.southeastasia.logic.azure.com:443/workflows/208e918d001f49b28261d6681d0734de/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=Ih4qS0Eomai9I1jyiVeWeLUL_j3tuXhlDuagrJODeKA');

$options = [CURLOPT_HEADER => true, CURLOPT_NOBODY => false, 
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'], 
    CURLOPT_HTTPHEADER => ['username: Steven.Soe', 'password: Default1'],
    CURLOPT_RETURNTRANSFER => true ];

curl_setopt_array($ch, $options);

$data = curl_exec($ch);
echo $data;

curl_close($ch);
