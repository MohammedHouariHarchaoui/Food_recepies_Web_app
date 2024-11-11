<?php

namespace app\models;
use app\core\db\DbModel;

class News extends DbModel{
    public $id ='';
    public $titre='';
    public $description='';
    public $image='';

    public static function tableName(){
        return 'news';
    }

    public function attributes(){
        return [
            'titre',
            'description',
            'image',
        ];
    }

    public function labels(){
        return [
            'titre'=>'Titre de news',
            'description'=>'Petite description sur la recette',
            'image'=>'Image pour le cadre'
        ];
    }

    public function rules(){
        return [
            'titre'=>[self::RULE_REQUIRED],
            'description'=>[self::RULE_REQUIRED],
            'image'=>[self::RULE_REQUIRED],
        ];
    }

    public function save(){
        return parent::save();
    }

    public static function primaryKey(){
        return 'id';
    }


    public function edit(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        
        $titre = $this->titre;
        $description = $this->description;
        $image = $this->image;
        $id = $this->id;
        
        $statement = self::prepare("UPDATE news SET titre =:titre , description=:description ,  image =:image  WHERE id=:id");
        
        $statement->bindValue(':titre',$titre);
        $statement->bindValue(':description',$description);
        $statement->bindValue(':image',$image);
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


    public function imagesUpload(){
        $newImgsNames=array();
        for ($i=0; $i<count($_FILES['images']['name']) ; $i++) {
            
            $name = $_FILES['images']['name'][$i];
            $size = $_FILES['images']['size'][$i];
            $tmp_name = $_FILES['images']['tmp_name'][$i];
            $error = $_FILES['images']['error'][$i];

            if($error===0){
                $img_ex = pathinfo($name,PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg","png","jpeg");

                if(in_array($img_ex_lc,$allowed_exs)){
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path = '../public/images/news/images/'.$new_img_name;
                    move_uploaded_file($tmp_name,$img_upload_path);
                    $newImgsNames[] = $new_img_name; 
                }else{

                }
            }
        }
        return $newImgsNames;
    }




    public function videoUpload(){
        $name = $_FILES['video']['name'];
        $size = $_FILES['video']['size'];
        $tmp_name = $_FILES['video']['tmp_name'];
        $error = $_FILES['video']['error'];

        if($error===0){
            $video_ex = pathinfo($name,PATHINFO_EXTENSION);
            $video_ex_lc = strtolower($video_ex);
            $allowed_exs = array("mp4");

            if(in_array($video_ex_lc,$allowed_exs)){
                $new_video_name = uniqid("VIDEO-",true).'.'.$video_ex_lc;
                $video_upload_path = '../public/images/recettes/videos/'.$new_video_name;
                move_uploaded_file($tmp_name,$video_upload_path);
                return $new_video_name; 
            }else{

            }
        }
    }

    
    public static function getAllHealthy()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName WHERE healthy='healthy' ORDER BY healthy DESC");
        $statement->execute();
        return $statement->fetchAll();
    }


    public static function getNews($id){
        $statement = self::prepare("SELECT *  
        FROM (SELECT * FROM news_images WHERE id_news=$id) as table1
        INNER JOIN news_paragraphes as table2
        ON table1.id_news = table2.id;");
        $statement->execute();
        return $statement->fetchAll();
    }


    public function imageUpload(){
        $name = $_FILES['image']['name'];
        $size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];

        if($error===0){
            $img_ex = pathinfo($name,PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg","png","jpeg");

            if(in_array($img_ex_lc,$allowed_exs)){
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = '../public/images/news/images/'.$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);
                return $new_img_name; 
            }else{

            }
        }
    }

}
