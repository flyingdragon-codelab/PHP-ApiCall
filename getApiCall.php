<?php 
//initialize curl 
$curl = curl_init(); 

//set parameters 
curl_setopt_array($curl, array( 
//expects a response 
CURLOPT_RETURNTRANSFER => 1, 
//get url CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts' )); 
// Send the request & save response to $resp 
$resp = curl_exec($curl); 
// Close request to clear up some resources 
curl_close($curl); 
echo $resp;
