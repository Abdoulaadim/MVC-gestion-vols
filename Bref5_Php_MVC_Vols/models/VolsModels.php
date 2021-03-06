<?php

class VolsModels{

     static public function getAll() {

        $stmt = DB::connect()->prepare('SELECT * from vols');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->null;

     }

     static public function searchVols ($data){

      $search=$data['search'];
      /*die (print_r($data));*/
      try{
         $query='select* from vols where date_depart like ?  OR date_arrivee like ? OR ville_depart like ? OR ville_arrivee like ? OR aeroport_depart like ? OR aeroport_arrivee like ?';
         $stmt=DB::connect()->prepare($query);
         $stmt->execute((array('%'.$search.'%', '%'.$search.'%','%'.$search.'%', '%'.$search.'%','%'.$search.'%', '%'.$search.'%')));
         $vols=$stmt->fetchAll();
         return $vols;

     }
     catch(PDOException $ex)
     {
      echo 'erreur'.$ex->getMessage();
     }

   }


   static public function add ($data){
      $stmt=DB::connect()->prepare('INSERT INTO vols (date_depart,date_arrivee,ville_depart,ville_arrivee,aeroport_depart,aeroport_arrivee,heure_depart,heure_arrivee,prix_vol,id_pilote,id_avion) VALUES (:date_depart,:date_arrivee,:ville_depart,:ville_arrivee,:aeroport_depart,:aeroport_arrivee,:heure_depart,:heure_arrivee,:prix_vol,:id_pilote,:id_avion)');
      $stmt->bindParam(':date_depart',$data['date_depart']);
      $stmt->bindParam(':date_arrivee',$data['date_arrivee']);
      $stmt->bindParam(':ville_depart',$data['ville_depart']);
      $stmt->bindParam(':ville_arrivee',$data['ville_arrivee']);
      $stmt->bindParam(':aeroport_depart',$data['aeroport_depart']);
      $stmt->bindParam(':aeroport_arrivee',$data['aeroport_arrivee']);
      $stmt->bindParam(':heure_depart',$data['heure_depart']);
      $stmt->bindParam(':heure_arrivee',$data['heure_arrivee']);
      $stmt->bindParam(':prix_vol',$data['prix_vol']);
      $stmt->bindParam(':id_pilote',$data['id_pilote']);
      $stmt->bindParam(':id_avion',$data['id_avion']);
      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }

   static public function getvols($data){
      $id_vols=$data['id_vols'];
      try{
          $query='select * from vols where id_vols=:id_vols';
          $stmt=DB::connect()->prepare($query);
          $stmt->execute((array(":id_vols"=>$id_vols)));
          $vols=$stmt->fetch(PDO::FETCH_OBJ);
          return $vols;
      }
      catch(PDOException $ex)
      {
       echo 'erreur'.$ex->getMessage();
      }
   }

   static public function update ($data){
      $stmt=DB::connect()->prepare('update  vols set date_depart=:date_depart ,date_arrivee=:date_arrivee ,ville_depart=:ville_depart,ville_arrivee=:ville_arrivee ,aeroport_depart=:aeroport_depart ,aeroport_arrivee=:aeroport_arrivee,heure_depart=:heure_depart ,heure_arrivee=:heure_arrivee ,prix_vol=:prix_vol,id_pilote=:id_pilote ,id_avion=:id_avion where id_vols=:id_vols');
      $stmt->bindParam(':id_vols',$data['id_vols']);
      $stmt->bindParam(':date_depart',$data['date_depart']);
      $stmt->bindParam(':date_arrivee',$data['date_arrivee']);
      $stmt->bindParam(':ville_depart',$data['ville_depart']);
      $stmt->bindParam(':ville_arrivee',$data['ville_arrivee']);
      $stmt->bindParam(':aeroport_depart',$data['aeroport_depart']);
      $stmt->bindParam(':aeroport_arrivee',$data['aeroport_arrivee']);
      $stmt->bindParam(':heure_depart',$data['heure_depart']);
      $stmt->bindParam(':heure_arrivee',$data['heure_arrivee']);
      $stmt->bindParam(':prix_vol',$data['prix_vol']);
      $stmt->bindParam(':id_pilote',$data['id_pilote']);
      $stmt->bindParam(':id_avion',$data['id_avion']);

      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }

   static public function delete($data){
      $id_vols=$data['id_vols'];
      try{
         $query='Delete from vols where id_vols=:id_vols';
         $stmt=DB::connect()->prepare($query);
         $stmt->execute((array(":id_vols"=>$id_vols)));
         if($stmt->execute()){
            return 'ok';
         }

     }
     catch(PDOException $ex)
     {
      echo 'erreur'.$ex->getMessage();
     }

   }

   static public function searchVolsDate ($data){


      $search=$data['search'];
      $search1=$data['search1'];
      $search2=$data['search2'];
      $search3=$data['search3'];
      /*die (print_r($data));*/
      try{
         $query='select* from vols where ville_depart like ? AND ville_arrivee  like ? AND date_depart   like ? AND date_arrivee  like ?';
         $stmt=DB::connect()->prepare($query);
         $stmt->execute((array('%'.$search.'%', '%'.$search1.'%','%'.$search2.'%', '%'.$search3.'%')));
         $vols=$stmt->fetchAll();
         //die(print_r($vols));
         return $vols;
         

     }
     catch(PDOException $ex)
     {
      echo 'erreur'.$ex->getMessage();
     }
 

   }

   static public function searchVolsDate1 ($data){
      
      $search=$data['search'];
      $search1=$data['search1'];
      $search2=$data['search2'];
    
      /*die (print_r($data));*/
      try{
         $query='select* from vols where ville_depart like ? AND ville_arrivee  like ? AND date_depart   like ? AND date_arrivee  like ?';
         $stmt=DB::connect()->prepare($query);
         $stmt->execute((array('%'.$search.'%', '%'.$search1.'%','%'.$search2.'%', '%'.$search2.'%')));
         $vols=$stmt->fetchAll();
         //die(print_r($vols));
         return $vols;
         

     }
     catch(PDOException $ex)
     {
      echo 'erreur'.$ex->getMessage();
     }

   }

   



  
}