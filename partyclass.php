<?php
class Shooter {
    
    private $id_party;
    private $type_party;
    private $image_party;
    private $name_party;
    private $recipe_party;
    private $method_party;
    

    public function getId(){
        return htmlspecialchars(strip_tags($this->id_party));
    }

    public function setId($newId){
        $this->id_party=$newId;
    }

    public function getType(){
        return htmlspecialchars(strip_tags($this->type_party));
    }

    public function setType($newType){
        $this->type_party=$newType;
    }

    public function getImage(){
        return htmlspecialchars(strip_tags($this->image_party));
    }
   
    public function setImage($newImage){
       $this->image_party=$newImage;
    }

    public function getName(){
        return htmlspecialchars(strip_tags($this->name_party));
    }

    public function setName($newname){
        $this->name_party=$newName;
    }

   
     public function getRecipe(){
        return htmlspecialchars(strip_tags($this->recipe_party));
    }

    public function setRecipe($newRecipe){
        $this->recipe_party=$newRecipe;
    }
    public function getMethod(){
        return htmlspecialchars(strip_tags($this->method_party));
    }

    public function setMethod($newMethod){
        $this->method_party=$newMethod;
    }


public function showParty($bdd){

            try {
               $ask = $bdd->prepare('SELECT * FROM party');
               $ask->execute(array(
                                   
                                   'id_party'=>htmlspecialchars(strip_tags($this->getId())),
                                   'type_party'=>htmlspecialchars(strip_tags($this->getType())),
                                   'image_party'=>htmlspecialchars(strip_tags($this->getImage())),
                                   'name_party'=>htmlspecialchars(strip_tags($this->getName())),
                                   'recipe_party'=>htmlspecialchars(strip_tags($this->getRecipe())), 
                                   'method_party'=>htmlspecialchars(strip_tags($this->getMethod()))
                                   ));
                                  
                               
                                   $ask->execute();
                                   $result= $ask->fetchAll();
            }
                 catch(Exception $e){
                   die('Error : '.$e->getMessage());
                 }
                 return $result;
                 }
                
                
}

            
       
    
   

