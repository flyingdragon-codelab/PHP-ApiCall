<?php

$ch = curl_init('http://webcode.me');
 
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
curl_exec($ch);

$status = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
echo $status;
 
curl_close($ch);
