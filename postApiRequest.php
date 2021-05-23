<?php  
//initialize curl  
$curl = curl_init();  

//set parameters  
curl_setopt_array($ch, array( 
CURLOPT_RETURNTRANSFER => 1, 
CURLOPT_HTTPHEADER => array( 
           //your headers here (optional) 
           ), 
CURLOPT_URL => 'https://url/to/your/api/endpoint', CURLOPT_SSL_VERIFYPEER => false, 
//optional 
CURLOPT_POST => 1, 
CURLOPT_POSTFIELDS => $data 
)); 
// Send the request & save response to $resp  
$resp = curl_exec($curl);  
// Close request to clear up some resources  curl_close($curl);  echo $resp;
