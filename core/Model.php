<?php

namespace app\core;

abstract class Model{

    const RULE_REQUIRED = "required";
    const RULE_EMAIL = "email";
    const RULE_MIN = "min";
    const RULE_MAX = "max";
    const RULE_MATCH = "match";
    const RULE_UNIQUE = "unique";

    public $errors =[];
    
    public function loadData($data){
        foreach ($data as $key => $value) {
            if(property_exists($this,$key)){
                $this->{$key}=$value;
            }
        }
    }

    // public function loadData($data){
    //     foreach ($data as $key => $value) {
    //         if(property_exists($this,$key) && empty($this->{$key})){
    //             $this->{$key}=$value;
    //         }
    //     }
    // }
    



    public function addErrorForRule($attribute , $rule , $params=[]){
        $message = $this->errorsMessage()[$rule];
        foreach ($params as $key => $value) {
            $message = str_replace("{$key}",$value,$message);
        }
        $this->errors[$attribute][]=$message;
    }

    public function addError($attribute , $message){
        $this->errors[$attribute][]=$message;
    }

    public function errorsMessage(){
        return [
            self::RULE_REQUIRED =>'This field is required',
            self::RULE_EMAIL =>'This field must be a valide email address',
            self::RULE_MIN =>'Min length of this field must be min',
            self::RULE_MAX =>'Max length of this field must be max',
            self::RULE_MATCH =>'This field must be same as match',
            self::RULE_UNIQUE =>'Record with this {field} already exists'
        ];
    }

    abstract public function rules();

    public function validate(){
        foreach ($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $ruleName = $rule;
                if(!is_string($ruleName)){
                    $ruleName = $rule[0];
                }
                if($ruleName === self::RULE_REQUIRED && !$value){
                    $this->addErrorForRule($attribute,self::RULE_REQUIRED);
                }
                if($ruleName === self::RULE_EMAIL && !filter_var($value,FILTER_VALIDATE_EMAIL)){
                    $this->addErrorForRule($attribute,self::RULE_EMAIL);
                }
                if($ruleName === self::RULE_MIN && strlen($value) < $rule['min']){
                    $this->addErrorForRule($attribute,self::RULE_MIN,$rule);
                }
                if($ruleName === self::RULE_MAX && strlen($value) > $rule['max']){
                    $this->addErrorForRule($attribute,self::RULE_MAX,$rule);
                }
                if($ruleName === self::RULE_MATCH && $value !== $this->{$rule['match']}){
                    $this->addErrorForRule($attribute,self::RULE_MATCH,$rule);
                }
                if($ruleName === self::RULE_UNIQUE){
                    $className = $rule['class'];
                    $uniqueAttribute = $attribute;
                    $tableName = $className::tableName();
                    $statement = Application::$app->db->prepare("SELECT * FROM $tableName WHERE $uniqueAttribute = :$uniqueAttribute ");
                    $statement->bindValue(":$uniqueAttribute",$value);
                    $statement->execute();
                    $record = $statement->fetchObject();
                    if($record){
                        $this->addErrorForRule($attribute,self::RULE_UNIQUE,['field'=>$this->labels()[$attribute]]);
                    }
                }
            }
        }
        return empty($this->errors);
    }

    abstract public function labels();

    public function getLabel($attribute)
    {
        return ($this->labels()[$attribute]) ? ($this->labels()[$attribute]) : $attribute;
    }


    public function hasError($attribute){
        return !empty($this->errors[$attribute]) ? True : False;
    }

    public function getFirstError($attribute){
        return $this->hasError($attribute) ? $this->errors[$attribute][0] :False;
    }



    
}