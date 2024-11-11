<?php

namespace app\models;
use app\core\db\DbModel;

class IngrediantClass extends DbModel{

    public $id ='';
    public $nom ='';

    public static function tableName(){
        return 'nutritions_classes';
    }

    public function attributes(){
        return [
            'nom',
        ];
    }

    public function labels(){
        return;
    }

    public function rules(){
        return;
    }
}