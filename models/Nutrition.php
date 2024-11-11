<?php

namespace app\models;
use app\core\db\DbModel;

class Nutrition extends DbModel{
    public $id ='';
    public $nom='';
    public $class='';
    public $saison ='';
    public $healthy='';
    public $measureQuantity='';
    public $calorie;
    public $calorieReference;
    public $glupide;
    public $glupideReference;
    public $lipide;
    public $lipideReference;
    public $miniraux;
    public $minirauxReference;
    public $protein='';
    public $proteinReference='';
    public $vitamine;
    public $vitamineReference;
    public $cholesterol;
    public $cholesterolReference;
    public $image ='';


    public static function tableName(){
        return 'nutritions';
    }

    public function attributes(){
        return [
            'nom',
            'class',
            'saison',
            'healthy',
            'measureQuantity',
            'calorie',
            'calorieReference',
            'glupide',
            'glupideReference',
            'lipide',
            'lipideReference',
            'miniraux',
            'minirauxReference',
            'protein',
            'proteinReference',
            'vitamine',
            'vitamineReference',
            'image',
            'cholesterol',
            'cholesterolReference',
        ];
    }

    public function labels(){
        return [
            'nom'=>'Nom d\'ingrédiant',
            'class'=>'Class d\'ingrediant',
            'saison'=>'Saison d\'ingrediant',
            'healthy'=>'Ingrediant healthy ou pas',
            'measureQuantity'=>'La quantity de measure',
            'calorie'=>'Calorie aquérit',
            'calorieReference'=>'Calorie reference',
            'glupide'=>'Glupide',
            'glupideReference'=>'Glupide reference',
            'lipide'=>'Lipide',
            'lipideReference'=>'Lipide reference',
            'protein'=>'Protein',
            'proteinReference'=>'Protein reference',
            'miniraux'=>'Miniraux',
            'minirauxReference'=>'Miniraux reference',
            'vitamine'=>'Vitamine',
            'vitamineReference'=>'Vitamine reference',
            'image'=>'Image d\'ingrédiant',
            'cholesterol'=>'Cholesterol',
            'cholesterolReference'=>'Cholesterol reference',
        ];
    }

    public function rules(){
        return [
            'nom'=>[self::RULE_REQUIRED,[
                self::RULE_UNIQUE,'class' => self::class
            ]],
            'class'=>[self::RULE_REQUIRED],
            'measureQuantity'=>[self::RULE_REQUIRED],
            'saison'=>[self::RULE_REQUIRED],
            'healthy'=>[self::RULE_REQUIRED],
            'calorie'=>[self::RULE_REQUIRED],
            'calorieReference'=>[self::RULE_REQUIRED],
            'glupide'=>[self::RULE_REQUIRED],
            'glupideReference'=>[self::RULE_REQUIRED],
            'lipide'=>[self::RULE_REQUIRED],
            'lipideReference'=>[self::RULE_REQUIRED],
            'miniraux'=>[self::RULE_REQUIRED],
            'minirauxReference'=>[self::RULE_REQUIRED],
            'protein'=>[self::RULE_REQUIRED],
            'proteinReference'=>[self::RULE_REQUIRED],
            'vitamine'=>[self::RULE_REQUIRED],
            'vitamineReference'=>[self::RULE_REQUIRED],
            'cholesterol'=>[self::RULE_REQUIRED],
            'cholesterolReference'=>[self::RULE_REQUIRED],
            'image'=>[self::RULE_REQUIRED],
        ];
    }



    public static function primaryKey(){
        return 'id';
    }


    public function edit(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        //$params = array_map(function($attribute){return ":".$attribute;},$attributes);
        //echo "UPDATE $tableName SET firstname :".$this->firstname .", lastname:".$this->lastname .", email:".$this->email." WHERE id:".$this->id;
        //$statement = self::prepare("UPDATE $tableName SET firstname =".$this->firstname .", lastname=".$this->lastname .", email=".$this->email."WHERE id=".$this->id);
        $vitamine = $this->vitamine;
        $miniraux = $this->miniraux;
        $lipide = $this->lipide;
        $protein = $this->protein;
        $glupide = $this->glupide;
        $cholesterol= $this->cholesterol;
        $calorie = $this->calorie;
        $vitamineReference = $this->vitamineReference;
        $minirauxReference = $this->minirauxReference;
        $lipideReference = $this->lipideReference;
        $proteinReference = $this->proteinReference;
        $glupideReference = $this->glupideReference;
        $cholesterolReference = $this->cholesterolReference;
        $calorieReference = $this->calorieReference;
        $measureQuantity = $this->measureQuantity;
        $healthy = $this->healthy;
        $saison = $this->saison;
        $class = $this->class;
        $nom = $this->nom;
        $image = $this->image;
        $id = $this->id; 
       
        $statement = self::prepare("UPDATE nutritions SET nom =:nom , class =:class , saison =:saison ,  healthy =:healthy ,  measureQuantity =:measureQuantity , calorie =:calorie , calorieReference=:calorieReference , glupide=:glupide , glupideReference=:glupideReference , lipide=:lipide  ,  lipideReference=:lipideReference  , miniraux=:miniraux , minirauxReference=:minirauxReference , vitamine=:vitamine , vitamineReference=:vitamineReference , protein=:protein , proteinReference=:proteinReference , cholesterol=:cholesterol , cholesterolReference=:cholesterolReference ,  image=:image  WHERE id =:id");
       
        $statement->bindValue(':vitamine',$vitamine);
        $statement->bindValue(':miniraux',$miniraux);
        $statement->bindValue(':lipide',$lipide);
        $statement->bindValue(':protein',$protein);
        $statement->bindValue(':glupide',$glupide);
        $statement->bindValue(':cholesterol',$cholesterol);
        $statement->bindValue(':calorie',$calorie);

        $statement->bindValue(':vitamineReference',$vitamineReference);
        $statement->bindValue(':minirauxReference',$minirauxReference);
        $statement->bindValue(':lipideReference',$lipideReference);
        $statement->bindValue(':proteinReference',$proteinReference);
        $statement->bindValue(':glupideReference',$glupideReference);
        $statement->bindValue(':cholesterolReference',$cholesterolReference);
        $statement->bindValue(':calorieReference',$calorieReference);

        $statement->bindValue(':measureQuantity',$measureQuantity);
        $statement->bindValue(':healthy',$healthy);
        $statement->bindValue(':saison',$saison);
        $statement->bindValue(':class',$class);
        $statement->bindValue(':nom',$nom);
        $statement->bindValue(':image',$image);
        $statement->bindValue(':id',$id);
        //echo $id;
        $statement->execute();
        return true;
    }


    public function delete(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $statement = self::prepare("DELETE FROM  $tableName WHERE id=".$this->id);
        $statement->execute();
        return true;
    }


    public function imageUpload(){
        $name = $_FILES['image']['name'];
        $size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];

        if($error===0){
            $img_ex = pathinfo($name,PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg","png","jpeg");

            if(in_array($img_ex_lc,$allowed_exs)){
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = '../public/images/nutritions/'.$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);
                return $new_img_name; 
            }else{

            }
        }
    }

    public static function getIngrediantsOfRecette($id){
        $statement = self::prepare("SELECT *  
        FROM (SELECT * FROM recettes_nutritions WHERE id_recette=$id) as table1
        INNER JOIN nutritions as table2
        ON table1.id_nutrition = table2.id;");
        $statement->execute();
        return $statement->fetchAll();
    } 

    public static function getIngrediantsOfRecetteProposer($id){
        $statement = self::prepare("SELECT *  
        FROM (SELECT * FROM  recettes_proposees_nutritions WHERE id_recette=$id) as table1
        INNER JOIN nutritions as table2
        ON table1.id_nutrition = table2.id;");
        $statement->execute();
        return $statement->fetchAll();
    } 
}
