<?php

$serverName = "10.88.80.35";  
  
/* Connect using Windows Authentication. */  
try  
{  
$conn = new PDO( "sqlsrv:server=$serverName ; Database=TravCom", "steven.soe", "Default1");  
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
}  
catch(Exception $e)  
{   
die( print_r( $e->getMessage() ) );   
}  

?>