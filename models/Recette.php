<?php

namespace app\models;
use app\core\db\DbModel;

class Recette extends DbModel{
    public $id ='';
    public $nom='';
    public $difficulte='';
    public $tempPreparation='';
    public $categorie='';
    public $tempTotale='';
    public $tempCuisson='';
    public $tempRepos='';
    public $estimationCalorie='';
    public $notation ='';
    public $fete = '';
    public $image='';
    public $healthy='';
    public $saison='';
    public $description='';

    public static function tableName(){
        return 'recettes';
    }

    public function attributes(){
        return [
            'nom',
            'difficulte',
            'tempPreparation',
            'tempCuisson',
            'tempRepos',
            'tempTotale',
            'categorie',
            'estimationCalorie',
            'notation',
            'fete',
            'image',
            'healthy',
            'saison',
            'description',
        ];
    }

    public function labels(){
        return [
            'nom'=>'Nom de recette',
            'difficulte'=>'La difficulte',
            'categorie'=>'Choisir la categorie de la recette',
            'tempTotale'=>'Temp totale',
            'tempPreparation'=>'Temp de preparation',
            'tempCuisson'=>'Temp de cuisson',
            'tempRepos'=>'Temp de repos',
            'estimationCalorie'=>'Estimation des calories',
            'notation'=>'Notation de la recette',
            'fete'=>'Recette pour une fete',
            'image'=>'Image',
            'healthy'=>'Healthy ou pas',
            'saison'=>'Saison de recette',
            'description'=>'Petite description sur la recette',
        ];
    }

    public function rules(){
        return [
            'nom'=>[self::RULE_REQUIRED,[
                self::RULE_UNIQUE,'class' => self::class
            ]],
            'difficulte'=>[self::RULE_REQUIRED],
            'tempPreparation'=>[self::RULE_REQUIRED],
            'tempCuisson'=>[self::RULE_REQUIRED],
            'tempTotale'=>[self::RULE_REQUIRED],
            'categorie'=>[self::RULE_REQUIRED],
            'tempRepos'=>[self::RULE_REQUIRED],
            'estimationCalorie'=>[self::RULE_REQUIRED],
            'saison'=>[self::RULE_REQUIRED],
            'notation'=>[self::RULE_REQUIRED],
            'healthy'=>[self::RULE_REQUIRED],
            'fete'=>[self::RULE_REQUIRED],
            'description'=>[self::RULE_REQUIRED],
            'image'=>[self::RULE_REQUIRED]
        ];
    }

    public function save(){
        return parent::save();
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
        $fete = $this->fete;
        
        $notation = $this->notation;
        
        $estimationCalorie = $this->estimationCalorie;
        
        $tempRepos = $this->tempRepos;
        $tempCuisson = $this->tempCuisson;
        $tempPreparation = $this->tempPreparation;
        $tempTotale = $this->tempTotale;
        
        $difficulte = $this->difficulte;
        
        $nom = $this->nom;
        
        $saison = $this->saison;
        
        $description = $this->description;
        
        $healthy = $this->healthy;
        
        $categorie = $this->categorie;

        $image = $this->image;
        
        $id = $this->id; 
        
        $statement = self::prepare("UPDATE recettes SET nom =:nom , saison=:saison , difficulte =:difficulte , tempPreparation =:tempPreparation ,  tempCuisson =:tempCuisson ,  tempRepos =:tempRepos , notation=:notation , estimationCalorie =:estimationCalorie , fete=:fete , tempTotale=:tempTotale , categorie=:categorie , healthy=:healthy , description=:description , image=:image WHERE id =:id");
        
        $statement->bindValue(':fete',$fete);
        $statement->bindValue(':notation',$notation);
        $statement->bindValue(':estimationCalorie',$estimationCalorie);
        $statement->bindValue(':tempRepos',$tempRepos);
        $statement->bindValue(':tempCuisson',$tempCuisson);
        $statement->bindValue(':tempPreparation',$tempPreparation);
        $statement->bindValue(':difficulte',$difficulte);
        $statement->bindValue(':nom',$nom);
        $statement->bindValue(':tempTotale',$tempTotale);
        $statement->bindValue(':categorie',$categorie);
        
        $statement->bindValue(':description',$description);
        $statement->bindValue(':healthy',$healthy);
        $statement->bindValue(':saison',$saison);
        $statement->bindValue(':image',$image);
        // echo $id;
        $statement->bindValue(':id',$id);
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
                $img_upload_path = '../public/images/recettes/images/'.$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);
                return $new_img_name; 
            }else{

            }
        }
    }




    public function videoUpload(){
        $name = $_FILES['video']['name'];
        $size = $_FILES['video']['size'];
        $tmp_name = $_FILES['video']['tmp_name'];
        $error = $_FILES['video']['error'];

        if($error===0){
            $video_ex = pathinfo($name,PATHINFO_EXTENSION);
            $video_ex_lc = strtolower($video_ex);
            $allowed_exs = array("mp4");

            if(in_array($video_ex_lc,$allowed_exs)){
                $new_video_name = uniqid("VIDEO-",true).'.'.$video_ex_lc;
                $video_upload_path = '../public/images/recettes/videos/'.$new_video_name;
                move_uploaded_file($tmp_name,$video_upload_path);
                return $new_video_name; 
            }else{

            }
        }
    }

    
    public static function getAllHealthy()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName WHERE healthy='Bonne' OR healthy='Tres bonne' ORDER BY estimationCalorie DESC");
        $statement->execute();
        return $statement->fetchAll();
    }


    public static function getAllBoissons()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName WHERE categorie='boisson' ORDER BY notation DESC");
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function getAllDesserts()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName WHERE categorie='dessert' ORDER BY notation DESC");
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function getAllPlats()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName WHERE categorie='plat' ORDER BY notation DESC");
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function getAllEntrees()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName WHERE categorie='entree' ORDER BY notation DESC");
        $statement->execute();
        return $statement->fetchAll();
    }


    public static function getAllWhere($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode('AND',array_map(function($attribute){return "$attribute = :$attribute" ;},$attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql ORDER BY notation DESC");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchAll();
    }


}
