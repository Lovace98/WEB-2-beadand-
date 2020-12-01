<?php
    
    class Hir_Model{
        public function hirIrasa($hir){
            $adat['uzenet']=$hir['hir'];
            $adat['ido']=date("Y-m-d H:i:s",time());
            $adat['login']=$_SESSION['userfirstname'];
            
            return $adat;
        }
    }
?>