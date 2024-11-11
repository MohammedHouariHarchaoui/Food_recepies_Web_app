<?php

namespace app\models;
use app\core\db\DbModel;

class UserRecetteAjouter extends DbModel{

    public $id ='';
    public $nom ='';

    public static function tableName(){
        return 'fetes';
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