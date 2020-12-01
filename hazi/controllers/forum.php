<?php

class Forum_Controller
{
	public $baseName = 'forum';  
	public function main(array $vars) 
	{
		
		$view = new View_Loader($this->baseName."_main");
	}
}

?>