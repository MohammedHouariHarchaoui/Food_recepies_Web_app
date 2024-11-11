<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\User;
use app\core\middlewares\AdminAuthMiddleware;

class AdminUsersValidationController extends Controller{
    public function __construct()
    {
        $this->registerMiddleware(new AdminAuthMiddleware([
            'acceuil',
            'add',
            'edit',
            'delete',
        ]));
    }
    
    public function acceuil(){
        $this->setLayout('auth');
        $users = new User();
        $users = $users->getAllWhere(['status'=>'0']);
        return Application::$app->router->renderOnlyView('admin_users_validation',[
            'users'=>$users,
        ]);
    }

    public function valider($request){
        $this->setLayout('auth');
            $id = $request->getBody()['id']; 
            $user = User::findOne(['id'=>$id]);
            if($user->valider()){
                Application::$app->session->setFlash('success','deleted successfully Tanks for registering');
                Application::$app->response->redirect('/admin/users_validation');
                exit;
            }
    }



    public function supprimer($request){
        //$this->setLayout('auth');
        $user = new User();
        if($request->isGet()){
            $user->loadData($request->getBody());
            if($user->delete()){
                Application::$app->session->setFlash('success','deleted successfully Tanks for registering');
                Application::$app->response->redirect('/admin/users_validation');
                exit;
            }
        }
    }
}