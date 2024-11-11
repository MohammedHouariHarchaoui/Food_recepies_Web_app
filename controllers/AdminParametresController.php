<?php 

namespace app\controllers;
use app\core\Controller;
use app\core\Application;
use app\models\Pourcentage;
use app\core\middlewares\AdminAuthMiddleware;



class AdminParametresController extends Controller{

    public function __construct()
    {
        $this->registerMiddleware(new AdminAuthMiddleware([
            'acceuil',
            'logout',
        ]));
    }

    public function acceuil(){
        $this->setLayout('auth');
        return Application::$app->router->renderOnlyView('admin_parametres',[]);
    }

    public function  pourcentage(){
        $pourcentage = new Pourcentage();
        $pourcentage = $pourcentage->getAll();
        $this->setLayout('auth');
        return Application::$app->router->renderOnlyView('admin_parametres_pourcentage',[
            'pourcentage'=>$pourcentage[0],
        ]);
    }


    //admin_parametres_pourcentage_edit
    public function  pourcentage_edit($request){
        $pourcentage = new Pourcentage();
        $pourcentage = $pourcentage->getAll()[0];
        $pourcentage = Pourcentage::findOne(['id'=>$pourcentage['id']]);
        $this->setLayout('auth');
        if($request->isPost()){
            $pourcentage->loadData($request->getBody());
            print_r($request->getBody());
            if($pourcentage->edit()){
                Application::$app->session->setFlash('success','edited successfully Tanks for registering');
                Application::$app->response->redirect('/admin/parametres/pourcentage');
                exit;
            }
        }
        
        return Application::$app->router->renderOnlyView('admin_parametres_pourcentage_edit',[
            'model'=>$pourcentage,
        ]);
    }
}