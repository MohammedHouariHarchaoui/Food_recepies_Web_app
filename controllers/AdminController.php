<?php 

namespace app\controllers;
use app\core\Controller;
use app\core\Application;
use app\models\AdminLogin;
use app\models\Recette;
use app\models\RecetteProposerUser;
use app\models\Nutrition;
use app\models\User;
use app\core\middlewares\AdminAuthMiddleware;



class AdminController extends Controller{

    public function __construct()
    {
        $this->registerMiddleware(new AdminAuthMiddleware([
            'acceuil',
            'logout',
        ]));
    }

    public function acceuil(){
        $user = new User();
        $user = $user->getAllWhere(['status'=>'1']);

        $recette = new Recette();
        $recette = $recette->getAll();
        
        $nutrition = new Nutrition();
        $nutrition = $nutrition->getAll();
        
        $recette_valid = new RecetteProposerUser();
        $recette_valid = $recette_valid->getAll();
        
        $new_user = new User();
        $new_user = $new_user->getAllWhere(['status'=>'0']);

        
        $this->setLayout('auth');
        return Application::$app->router->renderOnlyView('admin_acceuil',[
            'users'=>$user,
            'recettes'=>$recette,
            'nutritions'=>$nutrition,
            'recettes_valid'=>$recette_valid,
            'new_users'=>$new_user,
        ]);
    }

    public function login($request){
        $this->setLayout('auth');
        $login = new AdminLogin();
        if($request->isPost()){
            $login->loadData($request->getBody());
            if($login->validate() && $login->login()){
                Application::$app->session->setFlash('success','welcome again');
                //Application::$app->response->redirect('/admin/acceuil');
                //echo '<br/>admin controller'.Application::$admin.'<br/>';
                exit;
            }
            return $this->render('admin_login',['model'=>$login]); 
        }
        return $this->render('admin_login',['model'=>$login]);
    }

    public function logout($request){
        $this->setLayout('auth');
        Application::$app->logout();
        Application::$app->response->redirect('/admin');
    }
}