<?php 

namespace app\core;
use app\core\db\Database;
use app\core\db\DbModel;

class Application{
    public $request;
    public $router;
    public $response;
    public $controller;
    public $db;
    public $user;
    public static $admin;
    public $userClass;
    public $session;
    public $view;
    public static $app;
    public static $ROOT_DIR;
    public $layout='main';
    
    public function __construct($rootPath,$config){
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->userClass = $config['userClass'];
        $this->session = new Session();
        $this->db = new Database($config['db']);
        $this->userClass = $config['userClass'];
        $this->view = new View(); 
        $this->request = new Request();
        $this->router = new Router($this->request,$this->response);
        $this->response = new Response();

        $primaryValue = $this->session->get('user');
        if($primaryValue){
            $userClass = $this->userClass;
            $primaryKey = $userClass::primaryKey();
            $this->user = $userClass::findOne([$primaryKey => $primaryValue]);
        }else{
            $this->user = null;
        }
    }

    public function getController(){
        return $this->controller;
    }

    public function setController($controller){
        $this->controller = $controller;
    }

    public function run(){
        try {
            echo $this->router->resolve();
        } catch (\Exception $e) {
            $this->response->setStatusCode($e->getCode());
            echo $this->router->renderOnlyView('_error', [
                'exception' => $e,
            ]);
        }
    }


    public function login(UserModel $user , $admin)
    {
        echo '<br/> inside app login before '.self::$admin;
        self::$admin = $admin;
        echo '<br/> inside app login after '.self::$admin;
        $this->user = $user;
        $className = get_class($user);
        $primaryKey = $className::primaryKey();
        $value = $user->{$primaryKey};
        Application::$app->session->set('user', $value);
        echo '<br/> inside app la fin ta3 login '.self::$admin;
        return true;
    }



    public function logout(){
        $this->user = null;
        self::$admin = false;
        $this->session->remove('user');
    }

    public static function isGuest(){
        return !self::$app->user;
    }

    public static function isNotAdmin(){
        // echo 'is not admin '.self::$admin;
        return self::$admin;
    }
}