<?php


namespace app\models;
use app\core\Model;

class ContactForm extends Model{
    public $subject='';
    public $email='';
    public $body='';
    
    public function rules(){
        return [
            'subject'=>[self::RULE_REQUIRED],
            'email'=>[self::RULE_REQUIRED],
            'body'=>[self::RULE_REQUIRED],
        ];
    }

    public function labels(){
        return [
            'subject'=>'Enter your subject',
            'email'=>'Enter your email',
            'body'=>'Text'
        ];
    }

    public function send(){
        
        return true;
    }
}