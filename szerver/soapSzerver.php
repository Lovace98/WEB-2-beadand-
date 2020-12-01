<?php
	class Cegrol {
		
		public function alapitas()  {
			return "A cég alapításának dátuma: pl.1996";
		}
		public function foglalkozas(){
			return "Mivel foglalkozik cégünk: pl.. Villamos kapvcsolóberendezés gyártás";
		}
		public function datum()  {
			return date("Y-m-d H:i:s",time());
		}
		public function Igazgato()  {
			return "Cég igazgatója: pl. Kovács József";
		}
		
	}
	$options = array(
	"uri" => "http://localhost/hazi/szerver/soapSzerver.php");
	$server = new SoapServer(null, $options);
	$server->setClass('Cegrol');
	$server->handle();
?>