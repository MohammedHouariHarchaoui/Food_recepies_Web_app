<?php

namespace app\core\form;

use app\core\Model;

class InputField extends BaseField{

    const TYPE_TEXT = 'text';
    const TYPE_PASSWORD = 'password';
    const TYPE_NUMBER = 'number';
    const TYPE_FILE = 'file';

    public $type;
    public $placeholder;

    public function __construct($model,$attribute,$placeholder){
        $this->type = self::TYPE_TEXT;
        $this->placeholder = $placeholder;
        parent::__construct($model,$attribute);
    }


    public function passwordField(){
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function fileField(){
        $this->type = self::TYPE_FILE;
        return $this;
    }


    public function renderInput()
    {
        return sprintf('<input type="%s" class="form-control%s" name="%s" value="%s" placeholder="%s">',
            $this->type,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
            $this->placeholder
        );
    }


}