<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\User;
use app\core\middlewares\AdminAuthMiddleware;

class AdminUsersController extends Controller{
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
        $users = $users->getAll();
        $params =[
        'users'=>$users
        ];
        return Application::$app->router->renderOnlyView('admin_users',$params);
    }
    
    public function add($request){
        $this->setLayout('auth');
        $user = new User();
        if($request->isPost()){
            $user->loadData($request->getBody());
            if($user->validate() && $user->save()){
                Application::$app->session->setFlash('success','Tanks for registering');
                Application::$app->response->redirect('/admin/users');
                exit;
            }
        }
        return $this->render('admin_users_add',[
            'model'=>$user,
        ]);
    }


    public function edit($request){
        $this->setLayout('auth');
        $user = new User();
        if($request->isPost()){
            $user->loadData($request->getBody());
            //print_r($request->getBody());
            if($user->edit()){
                Application::$app->session->setFlash('success','edited successfully Tanks for registering');
                Application::$app->response->redirect('/admin/users');
                exit;
            }
        }
        if($request->isGet()){
            $id = $request->getBody()['id']; 
            $user = User::findOne(['id'=>$id]);
            return $this->render('admin_users_edit',[
                'model'=>$user,
            ]);
        }
    }



    public function delete($request){
        //$this->setLayout('auth');
        $user = new User();
        if($request->isGet()){
            $user->loadData($request->getBody());
            if($user->delete()){
                Application::$app->session->setFlash('success','deleted successfully Tanks for registering');
                Application::$app->response->redirect('/admin/users');
                exit;
            }
        }
    }
}