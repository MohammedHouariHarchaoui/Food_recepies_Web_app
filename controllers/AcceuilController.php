<?php 

namespace app\controllers;
use app\core\Controller;
use app\core\Application;
use app\models\Recette;

class AcceuilController extends Controller{
    public function acceuil(){
        $recette = new Recette();
        $entrees = $recette->getAllEntrees();
        $plats = $recette->getAllPlats();
        $desserts = $recette->getAllDesserts();
        $boissons = $recette->getAllBoissons();
        return $this->render('acceuil',[
            'entrees'=>$entrees,
            'plats'=>$plats,
            'desserts'=>$desserts,
            'boissons'=>$boissons,
        ]);
    }
}