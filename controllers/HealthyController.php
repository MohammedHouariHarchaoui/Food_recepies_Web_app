<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\Recette;

class HealthyController extends Controller{
    public function healthy($request){
        $recettes = new Recette();
        $recettes = Recette::getAllHealthy();
        $seuilCalorie='';
        if($request->isPost()){
            $selectedResettes = array();
            $seuilCalorie = $request->getBody()['calorie'];
            foreach ($recettes as $recette) {
                if($recette['estimationCalorie']>=$seuilCalorie){
                    $selectedResettes [] = $recette;
                }
            }
            $recettes = $selectedResettes;
        }
        return $this->render('healthy',[
            'recettes'=>$recettes,
            'seuilCalorie'=>$seuilCalorie,
        ]);
    }
}