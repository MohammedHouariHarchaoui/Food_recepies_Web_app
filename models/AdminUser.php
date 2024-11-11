<?php

namespace app\models;
use app\core\UserModel;
use app\core\Application;

class AdminUser extends UserModel{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    public $id ='';
    public $firstname='';
    public $lastname='';
    public $date_naissance = '';
    public $sexe;
    public $email='';
    public $status=self::STATUS_INACTIVE;
    public $password='';
    public $confirmPassword='';

    public static function tableName(){
        return 'admin_users';
    }

    public function attributes(){
        return [
            'firstname',
            'lastname',
            'email',
            'sexe',
            'date_naissance',
            'password',
            'status'
        ];
    }

    public function labels(){
        return [
            'firstname'=>'Nom',
            'lastname'=>'Prenom',
            'email'=>'Email',
            'sexe'=>'Sexe',
            'date_naissance'=>'Date de naissance',
            'password'=>'Mot de passe',
            'confirmPassword'=>'Mot de passe confirmation confirmation',
        ];
    }

    public function rules(){
        return [
            'firstname'=>[self::RULE_REQUIRED],
            'lastname'=>[self::RULE_REQUIRED],
            'email'=>[self::RULE_REQUIRED,self::RULE_EMAIL,[
                self::RULE_UNIQUE,'class' => self::class
            ]],
            'sexe'=>[self::RULE_REQUIRED],
            'date_naissance'=>[self::RULE_REQUIRED],
            'password'=>[self::RULE_REQUIRED,[self::RULE_MIN,'min'=>8],[self::RULE_MAX,'max'=>25]],
            'confirmPassword'=>[self::RULE_REQUIRED,[self::RULE_MATCH,'match'=>'password']]
        ];
    }

    public function save(){
        $this->status = self::STATUS_ACTIVE;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public static function primaryKey(){
        return 'id';
    }

    public function getDisplayName(){
        return $this->firstname;
    }





    public function edit(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        //$params = array_map(function($attribute){return ":".$attribute;},$attributes);
        //echo "UPDATE $tableName SET firstname :".$this->firstname .", lastname:".$this->lastname .", email:".$this->email." WHERE id:".$this->id;
        //$statement = self::prepare("UPDATE $tableName SET firstname =".$this->firstname .", lastname=".$this->lastname .", email=".$this->email."WHERE id=".$this->id);
        $firstname = $this->firstname;
        $lastname = $this->lastname;
        $email = $this->email;
        $id = $this->id; 
        $statement = self::prepare("UPDATE users SET firstname =:firstname , lastname =:lastname , email =:email WHERE id =:id");
        $statement->bindValue(':firstname',$firstname);
        $statement->bindValue(':lastname',$lastname);
        $statement->bindValue(':email',$email);
        $statement->bindValue(':id',$id);
        //echo $id;
        $statement->execute();
        return true;
    }


    public function delete(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $statement = self::prepare("DELETE FROM  $tableName WHERE id=".$this->id);
        $statement->execute();
        return true;
    }

    public function login(){
        $user = User::findOne(['email' => $this->email]);
        return Application::$app->login($user,true);
    }
}
