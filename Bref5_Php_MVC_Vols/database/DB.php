<?php

class DB {
 
    static public function connect(){

        $db=new PDO("mysql:host=localhost;dbname=y-c_gestion_res-vols","root","");
        $db->exec("set name utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); //type d'erreur 
        return $db;
    }
}

?>
