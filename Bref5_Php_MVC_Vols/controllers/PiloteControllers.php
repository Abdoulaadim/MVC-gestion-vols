<?php

class PiloteControllers{
 
    public function getALLPilote(){
        $pilote= PiloteModels::getAll();
        return $pilote;
    }

       
    public function findPilote(){

        if(isset($_POST['search'])){
          $data=array('search' => $_POST['search']);
        }
        $pilote=PiloteModels::searchPilote($data);
        return $pilote;
  
      }

      
    public function addPilote(){
        if(isset($_POST['submit'])){
            $data=array(
  
              'nom'=>$_POST['nom'],
              'prenom'=>$_POST['prenom'],
              'num_pilote'=>$_POST['num_pilote']
              
            );
            
            $result=PiloteModels::add($data);
  
            if($result==='ok'){
              session::set('success','Pilote Ajouté avec success');
              Redirect::to('pilote');
            }else{
                echo $result;
            }
        }
      }

      
   public function getOnePilote(){
    if(isset($_POST['id_pilote'])){
      $data=array('id_pilote'=>$_POST['id_pilote']);
      

    }
     $pilote=PiloteModels::getPilote($data);
     return $pilote;
  }

  public function updatePilote(){
    if(isset($_POST['submit'])){
        $data=array(
          'id_pilote'=>$_POST['id_pilote'],
          'nom'=>$_POST['nom'],
          'prenom'=>$_POST['prenom'],
          'num_pilote'=>$_POST['num_pilote']
         
        );
        
        $result=PiloteModels::update($data);

        if($result==='ok'){
          session::set('success','Pilote Modifier avec success');
          Redirect::to('pilote');
        }else{
            echo $result;
        }
    }
  }

  public function deletePilote(){

    if(isset($_POST['id_pilote'])){
        $data['id_pilote']=$_POST['id_pilote'];
        $result=PiloteModels::delete($data);
        if($result === 'ok')
        {
          session::set('success','Pilote Supprime avec success');
         /* header('location:'.BASE_URL);*/
          Redirect::to('pilote');

        }else{
          
          echo $result;
        }
    }
  }



  

}