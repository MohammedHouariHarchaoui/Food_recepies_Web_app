<?php 

namespace app\core;

class Request{
    public function getPath(){
        $path = $_SERVER['REQUEST_URI'];
        // if($path=="/TDW_PROJECT/public/")
        // {
        // $path = str_replace("/TDW_PROJECT/public","",$path);
        // }
        // echo $path;
        $position = strpos($path,'?');
        if($position === false){
            return $path;
        }
        return substr($path,0,$position);
    }

    public function method(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isGet(){
        return $this->method() === 'get';
    }

    public function isPost(){
        return $this->method() === 'post';
    }

    public function getBody(){
        $body =[];
        
        if($this->method() === 'get'){
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET,$key,FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if($this->method() === 'post'){
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST,$key,FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }



    // public function getBodyIdeeRecette(){
    //     $body =[];
        
    //     if($this->method() === 'get'){
    //         foreach ($_GET as $key => $value) {
    //             $body[$key] = filter_input(INPUT_GET,$key,FILTER_SANITIZE_SPECIAL_CHARS);
    //         }
    //     }

    //     if($this->method() === 'post'){
    //         foreach ($_POST as $key) {
    //             $key = array($key);
    //             foreach ($key as $field => $value) {
    //                 // echo '<br/>';
    //                 // //print_r($field) ;
    //                 // echo '=>';
    //                 // print_r($value);
    //                 // echo '<br/>';
    //                 $value = array($value);
    //                 foreach($value as $f => $v){
    //                    print_r($v);
    //                 }
    //             }
    //         }
    //     }

    //     return $body;
    // }

    public function isFileSeted($file){
        return isset($_FILES[$file]);
    }

    public function getEtapesArray(){
        if($this->method() === 'get'){
            return $_GET['etapes'];
        }

        if($this->method() === 'post'){
            return $_POST['etapes'];
        }
    }


    public function getIngrediantsArray(){
        if($this->method() === 'get'){
            return $_GET['ingrediants'];
        }

        if($this->method() === 'post'){
            return $_POST['ingrediants'];
        }
    }

    public function getQuantitysArray(){
        if($this->method() === 'get'){
            return $_GET['quantitys'];
        }

        if($this->method() === 'post'){
            return $_POST['quantitys'];
        }
    }

    public function getImagesArray(){
        if($this->method() === 'get'){
            return $_GET['images'];
        }

        if($this->method() === 'post'){
            return $_POST['images'];
        }
    }

    public function getParagraphesArray(){
        if($this->method() === 'get'){
            return $_GET['paragraphes'];
        }

        if($this->method() === 'post'){
            return $_POST['paragraphes'];
        }
    }

}