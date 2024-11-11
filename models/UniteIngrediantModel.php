<?php

namespace app\models;
use app\core\db\DbModel;

class UniteIngrediantModel extends DbModel{

    public $id ='';
    public $nom ='';

    public static function tableName(){
        return 'unite_measure';
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