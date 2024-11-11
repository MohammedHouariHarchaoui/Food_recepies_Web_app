<?php

namespace app\models;
use app\core\db\DbModel;

class RecetteNote extends DbModel{

    public $id_user ='';
    public $id_recette ='';
    public $note ='';

    public static function tableName(){
        return 'recette_note';
    }

    public function attributes(){
        return [
            'id_user',
            'id_recette',
            'note',
        ];
    }

    public function labels(){
        return;
    }

    public function rules(){
        return;
    }

    public static function findFavori($user_id,$recette_id)
    {
        $tableName = static::tableName();
        //$attributes = array_keys($where);
        //$sql = implode('AND',array_map(function($attribute){return "$attribute = :$attribute" ;},$attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE id_user = $user_id AND id_recette = $recette_id");
        $statement->execute();
        return $statement->fetchObject(static::class);
    }


    public function delete(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $statement = self::prepare("DELETE FROM  $tableName WHERE id_user=".$this->id_user." AND id_recette=".$this->id_recette);
        $statement->execute();
        return true;
    }


    public function getUserRecetteFavori($id){
        $statement = self::prepare("SELECT *  
        FROM (SELECT * FROM users_recettes_favori WHERE id_user=$id) as table1
        INNER JOIN recettes as table2
        ON table1.id_recette = table2.id;");
        $statement->execute();
        return $statement->fetchAll();
    }
}