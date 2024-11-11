<?php

namespace app\models;
use app\core\db\DbModel;

class Healthy extends DbModel{

    public $id ='';
    public $nom ='';

    public static function tableName(){
        return 'healthy';
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