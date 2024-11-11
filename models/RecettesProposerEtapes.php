<?php

namespace app\models;
use app\core\db\DbModel;

class RecettesProposerEtapes extends DbModel{

    public $id ='';
    public $id_recette ='';
    public $description='';

    public static function tableName(){
        return 'recettes_proposees_etapes';
    }

    public function attributes(){
        return [
            'id_recette',
            'description',
        ];
    }

    public function labels(){
        return;
    }

    public function rules(){
        return;
    }
}