<?php 

namespace app\core;
use app\core\exceptions\NotFoundException;



class Router{
    public $request;
    public $response;

    protected $routes=[];

    public function __construct($request,$response){
        $this->request = $request;
        $this->response = $response;
    }
    
    public function get($path , $callback){
        $this->routes['get'][$path]=$callback;
    }

    public function post($path , $callback){
        $this->routes['post'][$path]=$callback;
    }

    public function resolve(){
        $path = $this->request->getPath();
        $method = $this->request->method();
        try {
            if(($this->routes[$method][$path])){
                $callback = ($this->routes[$method][$path]);
            }else{
                $callback = false;
            }
        } catch (\Exception $th) {
            echo 'what';
        }
        if($callback === false){
            throw new NotFoundException();
            return $this->renderView("_404");
        }
        if(is_string($callback)){
            return $this->renderView($callback);
        }
        if(is_array($callback)){
            $controller = new $callback[0]();
            Application::$app->controller = $controller;
            $controller->action = $callback[1];
            $callback[0] = $controller;
            foreach ($controller->middlewares as $middleware) {
                $middleware->execute();
            }
            
        }
        return call_user_func($callback,$this->request);
    }

    public function renderView($view,$params=[]){
        return Application::$app->view->renderView($view,$params);
    }

    public function renderContent($viewContent){
        return Application::$app->view->renderContent($viewContent);
    }

    public function layoutContent(){
        return Application::$app->view->layoutContent();
    }

    public function renderOnlyView($view,$params){
        return Application::$app->view->renderOnlyView($view,$params);
    }
}