<?php

class Regisztral_Controller
{
	public $baseName = 'regisztral';  
	public function main(array $vars) 
	{
		$regisztralModel = new Regisztral_Model;  
		
		$retadat = $regisztralModel->adatok($vars);
		if($retadat['eredmeny'] == "ERROR")
			$this->baseName = "regisztracio";
		
		$view = new View_Loader($this->baseName.'_main');
		
		foreach($retadat as $name => $value)
			$view->assign($name, $value);
	}
}

?>