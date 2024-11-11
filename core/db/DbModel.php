<?php

namespace app\core\db;
use app\core\Model;
use app\core\Application;


abstract class DbModel extends Model{
    //public static function tableName(){}
    abstract public function attributes();
    //abstract public function primaryKey();

    public function save(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(function($attribute){return ":".$attribute;},$attributes);
        $statement = self::prepare("
            INSERT INTO $tableName (".implode(',',$attributes).") 
            VALUES(".implode(',',$params).")"
        );
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute",$this->{$attribute});
        }
        $statement->execute();
        return true;
    }

    public static function findOne($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode('AND',array_map(function($attribute){return "$attribute = :$attribute" ;},$attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }


    public static function getAllWhere($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode('AND',array_map(function($attribute){return "$attribute = :$attribute" ;},$attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getAll()
    {
        $tableName = static::tableName();
        //$attributes = array_keys($where);
        $statement = self::prepare("SELECT * FROM $tableName ");
        $statement->execute();
        //return $statement->fetchObject(static::class);
        return $statement->fetchAll();
    }

    


    

    public static function prepare($sql){
        return Application::$app->db->pdo->prepare($sql);
    }


    // public function edit(){
    //     $tableName = $this->tableName();
    //     $attributes = $this->attributes();
    //     $params = array_map(function($attribute){if ($attribute != $this->primaryKey()){return $attribute."=:".$attribute;}},$attributes);
    //     //"UPDATE culture SET Nom_culture = ?, Superficie = ? , Production = ? WHERE Id_culture = ?
    //     $statement = self::prepare("UPDATE $tableName SET ".implode(',',$params)."WHERE ".$this->primaryKey()."=:".$this->primaryKey());
    //     //echo  "UPDATE $tableName SET ".implode(',',$params)."WHERE ".$this->primaryKey()."=:".$this->primaryKey();
    //     $params = array_map(function($attribute){if ($attribute != $this->primaryKey()){return $attribute;}},$attributes);
    //     print_r($params);
    //     foreach ($params as $param) {
    //         if($param!=null){
    //             echo $param;
    //         echo $this->{$param};
    //         $statement->bindValue(":$param",$this->{$param});
    //         }
    //     }
    //     $primaryKey = $this->primaryKey();
    //     $statement->bindValue(":".$primaryKey,$this->{$primaryKey});
    //     $statement->execute();
    //     return true;
    // }



    // public function edit(){
    //     $tableName = $this->tableName();
    //     $attributes = $this->attributes();
    //     $params = array_map(function($attribute){if($attribute!=$this->primaryKey()){return $attribute.":".$attribute;}},$attributes);
    //     //print_r($params);
    //     //echo "UPDATE INTO ".$tableName." SET ".implode(',',$params)." WHERE ".$this->primaryKey()."=:".$this->primaryKey();
    //     $statement = self::prepare(
    //         "UPDATE INTO ".$tableName." SET ".implode(',',$params)." WHERE ".$this->primaryKey().":".$this->primaryKey()
    //     );
    //     foreach ($attributes as $attribute) {
    //         if($attribute!=null){
    //             $statement->bindValue(":$attribute",$this->{$attribute});
    //         }
    //     }
    //     $statement->bindValue(":".$this->primaryKey(),$this->{$this->primaryKey()});
    //     $statement->execute();
    //     return true;
    // }



    public function delete(){
        $tableName = $this->tableName();
        //$attributes = $this->attributes();
        //$params = array_map(function($attribute){return ":".$attribute;},$attributes);
        $statement = self::prepare("DELETE FROM $tableName WHERE ".$this->primaryKey()."=".$this->{$this->primaryKey()});
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute",$this->{$attribute});
        }
        $statement->execute();
        return true;
    }





}