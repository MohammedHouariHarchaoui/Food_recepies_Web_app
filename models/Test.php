<?php

namespace app\models;
use app\core\UserModel;

class Test extends UserModel{

    public $firstname='';
    public $lastname='';
    public $email='';

    public function primaryKey(){
        return 'email';
    }

    public static function tableName(){
        return 'test';
    }

    public function attributes(){
        return [
            'firstname',
            'lastname',
            'email'
        ];
    }

    public function labels(){
        return [
            'firstname'=>'Firstname',
            'lastname'=>'Lastname',
            'email'=>'Email',
        ];
    }

    public function rules(){
        return [
            'firstname'=>[self::RULE_REQUIRED],
            'lastname'=>[self::RULE_REQUIRED],
            'email'=>[self::RULE_REQUIRED,self::RULE_EMAIL,[
                self::RULE_UNIQUE,'class' => self::class
            ]],
        ];
    }

    public function save(){
        return parent::save();
    }

    // public static function primaryKey(){
    //     return 'id';
    // }

    public function getDisplayName(){
        return $this->firstname.' '.$this->lastname;
    }


    public function edit(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        //$params = array_map(function($attribute){return ":".$attribute;},$attributes);
        echo "UPDATE INTO $tableName SET firstname =".$this->firstname .", lastname=".$this->lastname ."WHERE email=".$this->email;
        $statement = self::prepare("UPDATE $tableName SET firstname =".$this->firstname .", lastname=".$this->lastname ."WHERE email=".$this->email);
        $statement->execute();
        return true;
    }


    public function delete(){
        $statement = self::prepare("DELETE FROM  test WHERE email=".$this->email);
        echo "DELETE FROM  test WHERE email=".$this->email;
        $statement->execute();
        return true;
    }
}