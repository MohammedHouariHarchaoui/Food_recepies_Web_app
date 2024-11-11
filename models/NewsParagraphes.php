<?php

namespace app\models;
use app\core\db\DbModel;

class NewsParagraphes extends DbModel{

    public $id ='';
    public $id_news='';
    public $paragraphe='';

    public static function tableName(){
        return 'news_paragraphes';
    }

    public function attributes(){
        return [
            'id_news',
            'paragraphe',
        ];
    }

    public function labels(){
        return;
    }

    public function rules(){
        return;
    }
}