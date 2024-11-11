<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\Nutrition;
use app\core\form\InputField;
use app\core\middlewares\AdminAuthMiddleware;

class AdminNutritionsController extends Controller{

    public function __construct()
    {
        $this->registerMiddleware(new AdminAuthMiddleware([
            'acceuil',
            'add',
            'edit',
            'delete',
            'view',
        ]));
    }
    
    public function acceuil($request){
        $nutritions = new Nutrition();
        $this->setLayout('auth');
        $nutritions = $nutritions->getAll();

        return Application::$app->router->renderOnlyView('admin_nutritions',[
            'nutritions'=>$nutritions,
        ]);
    }
    
    public function add($request){
        $nutrition = new Nutrition();
        $this->setLayout('auth');
        if($request->isPost()){
            $imagePath = $nutrition->imageUpload();
            $nutritionData = $request->getBody();
            $nutritionData += array('image'=>$imagePath);
            $nutrition->loadData($nutritionData);
            if($nutrition->validate() && $nutrition->save()){
                Application::$app->session->setFlash('success','Recette added successfully');
                Application::$app->response->redirect('/admin/nutritions');
                exit;
            }    
        }
        return $this->render('admin_nutritions_add',[
            'model'=>$nutrition,
        ]);
    }


    public function edit($request){
        $this->setLayout('auth');
        $nutrition = new Nutrition();
        if($request->isPost()){
            $nutrition->loadData($request->getBody());
            // print_r($request->getBody());
            if($nutrition->edit()){
                Application::$app->session->setFlash('success','edited successfully Tanks for registering');
                //Application::$app->response->redirect('/admin/nutritions');
                exit;
            }
        }
        if($request->isGet()){
            $id = $request->getBody()['id']; 
            $nutrition = Nutrition::findOne(['id'=>$id]);
            return $this->render('admin_nutritions_edit',[
                'model'=>$nutrition,
            ]);
        }
    }



    public function delete($request){
        //$this->setLayout('auth');
        $nutrition = new Nutrition();
        if($request->isGet()){
            $nutrition->loadData($request->getBody());
            if($nutrition->delete()){
                Application::$app->session->setFlash('success','deleted successfully Tanks for registering');
                Application::$app->response->redirect('/admin/nutritions');
                exit;
            }
        }
    }

    public function view($request){
        $this->setLayout("auth");
        $id = $request->getBody()['id']; 
        $nutrition = Nutrition::findOne(['id'=>$id]);
        return $this->render('admin_nutritions_view',[
            'nutrition'=>$nutrition,
        ]);
    }
}