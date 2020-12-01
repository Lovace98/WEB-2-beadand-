<?php
    class Hir_Controller{
        public $baseName = 'forum';
        public function main(array $vars) 
	{
		$hirModel = new Hir_Model;  
		
		$adat = $hirModel->hirIrasa($vars);
		
		
		$view = new View_Loader($this->baseName.'_main');
		
		foreach($adat as $name => $value)
			$view->assign($name, $value);
	}
}
?>