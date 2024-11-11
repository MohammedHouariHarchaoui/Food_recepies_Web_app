<?php

namespace app\models;
use app\core\db\DbModel;

class Pourcentage extends DbModel{

    public $id ='';
    public $pourcentage='';

    public static function tableName(){
        return 'pourcentage_idee_recette';
    }

    public function attributes(){
        return [
            'pourcentage',
        ];
    }

    public function labels(){
        return [
            'pourcentage'=>'Nouveau pourcentage',
        ];
    }

    public function rules(){
        return;
    }

    public function edit(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        //$params = array_map(function($attribute){return ":".$attribute;},$attributes);
        //echo "UPDATE $tableName SET firstname :".$this->firstname .", lastname:".$this->lastname .", email:".$this->email." WHERE id:".$this->id;
        //$statement = self::prepare("UPDATE $tableName SET firstname =".$this->firstname .", lastname=".$this->lastname .", email=".$this->email."WHERE id=".$this->id);
        $pourcentage = $this->pourcentage;
        $id = $this->id; 
        $statement = self::prepare("UPDATE pourcentage_idee_recette SET pourcentage =:pourcentage  WHERE id =:id");
        $statement->bindValue(':pourcentage',$pourcentage);
        $statement->bindValue(':id',$id);
        $statement->execute();
        return true;
    }

}