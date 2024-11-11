<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\Recette;

class RecetteController extends Controller{
    public function recettes(){
        $recettes = new Recette();
        $recettes = $recettes->getAll();
        return Application::$app->router->renderOnlyView('recettes',[
            'recettes'=>$recettes,
        ]);
    }

    public function rechercheAvancee(){
        $recettes = new Recette();
        $recettes = $recettes->getAll();
        return Application::$app->router->renderOnlyView('recherche_avance',[
            'recettes'=>$recettes,
        ]);
    }


    public function entrees(){
        $recettes = new Recette();
        $recettes = $recettes->getAllEntrees();
        return Application::$app->router->renderOnlyView('recettes',[
            'recettes'=>$recettes,
        ]);
    }

    public function plats(){
        $recettes = new Recette();
        $recettes = $recettes->getAllPlats();
        return Application::$app->router->renderOnlyView('recettes',[
            'recettes'=>$recettes,
        ]);
    }

    public function desserts(){
        $recettes = new Recette();
        $recettes = $recettes->getAllDesserts();
        return Application::$app->router->renderOnlyView('recettes',[
            'recettes'=>$recettes,
        ]);
    }

    public function boissons(){
        $recettes = new Recette();
        $recettes = $recettes->getAllBoissons();
        return Application::$app->router->renderOnlyView('recettes',[
            'recettes'=>$recettes,
        ]);
    }
}