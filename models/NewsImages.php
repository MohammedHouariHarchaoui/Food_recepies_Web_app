<?php

namespace app\models;
use app\core\db\DbModel;

class NewsImages extends DbModel{

    public $id ='';
    public $id_news ='';
    public $image='';

    public static function tableName(){
        return 'news_images';
    }

    public function attributes(){
        return [
            'id_news',
            'image',
        ];
    }

    public function labels(){
        return;
    }

    public function rules(){
        return;
    }
}