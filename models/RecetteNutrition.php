<?php

namespace app\models;
use app\core\db\DbModel;

class RecetteNutrition extends DbModel{

    public $id_nutrition ='';
    public $id_recette ='';
    public $quantity='';

    public static function tableName(){
        return 'Recettes_Nutritions';
    }

    public function attributes(){
        return [
            'id_recette',
            'id_nutrition',
            'quantity',
        ];
    }

    public function labels(){
        return;
    }

    public function rules(){
        return;
    }

    public static function getAllWhere($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode('AND',array_map(function($attribute){return "$attribute = :$attribute" ;},$attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchAll();
    }
}