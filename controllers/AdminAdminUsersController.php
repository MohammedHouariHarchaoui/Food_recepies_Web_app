<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\AdminUser;
use app\core\middlewares\AdminAuthMiddleware;

class AdminAdminUsersController extends Controller{

    public function __construct()
    {
        $this->registerMiddleware(new AdminAuthMiddleware([
            'acceuil',
            'edit',
            'add',
            'delete',
        ]));
    }

    
    public function acceuil(){
        $this->setLayout('auth');
        $users = new AdminUser();
        $users = $users->getAll();
        $params =[
        'users'=>$users
        ];
        return Application::$app->router->renderOnlyView('admin_admin_users',$params);
    }
    
    public function add($request){
        $this->setLayout('auth');
        $user = new AdminUser();
        if($request->isPost()){
            $user->loadData($request->getBody());
            if($user->validate() && $user->save()){
                Application::$app->session->setFlash('success','Tanks for registering');
                Application::$app->response->redirect('/admin/admin_users');
                exit;
            }
        }
        return $this->render('admin_admin_users_add',[
            'model'=>$user,
        ]);
    }


    public function edit($request){
        $this->setLayout('auth');
        $user = new AdminUser();
        if($request->isPost()){
            $user->loadData($request->getBody());
            //print_r($request->getBody());
            if($user->edit()){
                Application::$app->session->setFlash('success','edited successfully Tanks for registering');
                Application::$app->response->redirect('/admin/admin_users');
                exit;
            }
        }
        if($request->isGet()){
            $user->loadData($request->getBody());
            return $this->render('admin_admin_users_edit',[
                'model'=>$user,
            ]);
        }
    }



    public function delete($request){
        //$this->setLayout('auth');
        $user = new AdminUser();
        if($request->isGet()){
            $user->loadData($request->getBody());
            if($user->delete()){
                Application::$app->session->setFlash('success','deleted successfully Tanks for registering');
                Application::$app->response->redirect('/admin/admin_users');
                exit;
            }
        }
    }
}