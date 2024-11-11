<?php 


namespace app\core;

use app\core\Application;
use app\core\middlewares\AuthMiddleware;

abstract class Controller{

    public $middlewares =[];
    public $action =  '';
    public $layout='main';
    
    public function render($view ,$params=[]){
        return Application::$app->router->renderView($view,$params);
    }

    public function setLayout($layout){
        $this->layout = $layout;
    }

    public function registerMiddleware($middleware){
        $this->middlewares[] = $middleware;
    }
}