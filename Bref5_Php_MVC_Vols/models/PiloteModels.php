<?php

class PiloteModels{

     static public function getAll() {

        $stmt = DB::connect()->prepare('SELECT * from pilote');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->null;

     }

     static public function searchPilote ($data){

      $search=$data['search'];
      /*die (print_r($data));*/
      try{
         $query='select* from Pilote where nom like ?  OR prenom like ?';
         $stmt=DB::connect()->prepare($query);
         $stmt->execute((array('%'.$search.'%', '%'.$search.'%')));
         $pilote=$stmt->fetchAll();
         return $pilote;

     }
     catch(PDOException $ex)
     {
      echo 'erreur'.$ex->getMessage();
     }

   }


   static public function add ($data){
      $stmt=DB::connect()->prepare('INSERT INTO pilote (nom,prenom,num_pilote) VALUES (:nom,:prenom,:num_pilote)');
      $stmt->bindParam(':nom',$data['nom']);
      $stmt->bindParam(':prenom',$data['prenom']);
      $stmt->bindParam(':num_pilote',$data['num_pilote']);
      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }

   static public function getPilote($data){
      $id_pilote=$data['id_pilote'];
      try{
          $query='select * from pilote where id_pilote=:id_pilote';
          $stmt=DB::connect()->prepare($query);
          $stmt->execute((array(":id_pilote"=>$id_pilote)));
          $pilote=$stmt->fetch(PDO::FETCH_OBJ);
          return $pilote;
      }
      catch(PDOException $ex)
      {
       echo 'erreur'.$ex->getMessage();
      }
   }

   static public function update ($data){
      $stmt=DB::connect()->prepare('update  pilote set nom=:nom ,prenom=:prenom ,num_pilote=:num_pilote where id_pilote=:id_pilote');
      $stmt->bindParam(':id_pilote',$data['id_pilote']);
      $stmt->bindParam(':nom',$data['nom']);
      $stmt->bindParam(':prenom',$data['prenom']);
      $stmt->bindParam(':num_pilote',$data['num_pilote']);

      if($stmt->execute()){
       return 'ok';
    }else{
       return 'error';
    }
    
    $stmt=null;

   }

   static public function delete($data){
      $id_pilote=$data['id_pilote'];
      try{
         $query='Delete from pilote where id_pilote=:id_pilote';
         $stmt=DB::connect()->prepare($query);
         $stmt->execute((array(":id_pilote"=>$id_pilote)));
         if($stmt->execute()){
            return 'ok';
         }

     }
     catch(PDOException $ex)
     {
      echo 'erreur'.$ex->getMessage();
     }

   }

   



  
}