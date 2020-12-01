<?php

class Cegrol_Controller
{
	public $baseName = 'cegrol';  
	public function main(array $vars) 
	{
		
		$view = new View_Loader($this->baseName."_main");
	}
}

?>