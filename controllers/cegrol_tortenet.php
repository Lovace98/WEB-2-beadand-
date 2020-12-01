<?php

class Cegrol_tortenet_Controller
{
	public $baseName = 'cegrol_tortenet';  
	public function main(array $vars) 
	{
		
		$view = new View_Loader($this->baseName."_main");
	}
}

?>