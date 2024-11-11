<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\Recette;
use app\models\Fete;

class FeteController extends Controller{
    public function fete($request){
        $fetes = new Fete();
        $fetes = $fetes->getAll();
        $recettes = new Recette();
        $recettes = $recettes->getAll();
        if($request->isPost()){
            $fete =$request->getBody()['fete'];
            $recettes = Recette::getAllWhere(['fete'=>$fete]);
        }
        return $this->render('fete',[
            'recettes'=>$recettes,
            'fetes'=>$fetes,
        ]);
    }
}