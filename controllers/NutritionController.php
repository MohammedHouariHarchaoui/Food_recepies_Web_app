<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\Nutrition;


class NutritionController extends Controller{
    public function nutrition(){
        $nutritions = new Nutrition();
        $nutritions = $nutritions->getAll();
        return Application::$app->router->renderOnlyView('nutritions',[
            'nutritions'=>$nutritions,
        ]);
    }
    
    public function ingrediant($request){
        $id = $request->getBody()['id'];
        $nutrition = Nutrition::findOne(['id'=>$id]);
        return $this->render('nutrition_view',[
            'nutrition'=>$nutrition,
        ]); 
    }

    public function recherche_simple(){
        $nutritions = new Nutrition();
        $nutritions = $nutritions->getAll();
        return Application::$app->router->renderOnlyView('nutritions_simple',[
            'nutritions'=>$nutritions,
        ]);
    }
}