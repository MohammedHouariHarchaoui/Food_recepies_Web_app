<?php

namespace app\models;
use app\core\Model;
use app\core\Application;

class AdminLogin extends Model{

    public $email='';
    public $password='';

    public function labels(){
        return [
            'email'=>'Email',
            'password'=>'Password',
        ];
    }

    public function rules(){
        return [
            'email'=>[self::RULE_REQUIRED , self::RULE_EMAIL],
            'password'=>[self::RULE_REQUIRED]
        ];
    }

    public function login()
    {
        $user = AdminUser::findOne(['email' => $this->email]);
        if (!$user) {
            $this->addError('email', 'User does not exist with this email address');
            return false;
        }
        if (!password_verify($this->password, $user->password)) {
            $this->addError('password', 'Password is incorrect');
            return false;
        }

        return Application::$app->login($user,true);
    }
}