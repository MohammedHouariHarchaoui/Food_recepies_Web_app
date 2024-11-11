<?php

namespace app\core\form;
use app\core\Model;

class Form{
    public static function begin($action , $method){
        echo sprintf('<form action="%s" method="%s" enctype="multipart/form-data">',$action,$method);
        return new Form();
    }

    public static function end(){
        echo '</form>';
    }

    public function field($model,$attribute,$placeholder){
        return new InputField($model,$attribute,$placeholder);
    }
    

}