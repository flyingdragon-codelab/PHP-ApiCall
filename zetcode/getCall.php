<?php

$ch = curl_init('http://webcode.me');

$options = [CURLOPT_HEADER => true, CURLOPT_NOBODY => false, 
    CURLOPT_RETURNTRANSFER => true ];

curl_setopt_array($ch, $options);

$data = curl_exec($ch);
echo $data;

curl_close($ch);
