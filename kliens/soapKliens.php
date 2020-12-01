<?php
	
   $options = array(
   "location" => "http://localhost/hazi/szerver/soapSzerver.php",
   "uri" => "http://localhost/hazi/szerver/soapSzerver.php",
   'keep_alive' => false,
    
   );		
   try {
	$kliens = new SoapClient(null, $options);
	echo $kliens->alapitas()."<br>"; 
	echo $kliens->foglalkozas()."<br>";
	echo $kliens->igazgato()."<br>"; 
	echo "Az adatok lekérésének időpontja: ".$kliens->datum()."<br>"; 
	
		
   } catch (SoapFault $e) {
		var_dump($e);
   }
?>