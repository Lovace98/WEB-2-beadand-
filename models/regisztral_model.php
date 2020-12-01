<?php
 class Regisztral_model{
    
    public function adatok($adatok){
      
      $retadat['eredmény']="";
      try{
        $connection=Database::getConnection();
        $sql = "insert into felhasznalok values (0, :csaladi_nev, :utonev, :bejelentkezes, sha1(:jelszo), :jogosultsag)";
        $stmt = $connection->prepare($sql);
        if($adatok['csaladi_nev'] == "" || $adatok['utonev'] == "" || $adatok['login_nev'] == "" || $adatok['jelszo_reg'] == "")
        {
          $retadat['eredmeny']="ERROR";
          $retadat['uzenet'] = "A megadott adatok hiányosak!";  
        }
        else{
        if($stmt->execute(Array(':csaladi_nev' => $adatok['csaladi_nev'], ':utonev' => $adatok['utonev'],
                              ':bejelentkezes' => $adatok['login_nev'], ':jelszo' => $adatok['jelszo_reg'], ':jogosultsag' => '_1_')))
          {
            
            $retadat['eredmeny'] = "OK";
					$retadat['uzenet'] = "Sikeres regisztráció!";
          }
          else
          {
            $retadat['eredmeny']="ERROR";
            $retadat['uzenet']="A regisztráció sikertelen!";
            
          }
        }
      }
      catch (PDOException $e) {
					$retadat['eredmény'] = "ERROR";
					$retadat['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
    }
      return $retadat;
    }
 }
?>