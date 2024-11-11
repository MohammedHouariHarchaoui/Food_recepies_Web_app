<?php 
namespace app\core\middlewares;

use app\core\Application;
use app\core\exceptions\ForbiddenException;

class AdminAuthMiddleware extends BaseMiddleware{
    protected $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        //echo '<br/> adminaurth middleware '.Application::$admin.'<br/>';
        if (Application::isNotAdmin()) {
            // echo '<br/>in is onot admin <br/>';
            //in_array(Application::$app->controller->action, $this->actions)
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}