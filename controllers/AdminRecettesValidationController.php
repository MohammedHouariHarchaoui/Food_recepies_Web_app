<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\RecetteProposerUser;

use app\models\Nutrition;
use app\models\RecetteNutrition;
use app\models\RecettesProposeesNutritions;
use app\models\RecettesProposerEtapes;
use app\models\Recette;
use app\models\Etape;
use app\core\middlewares\AdminAuthMiddleware;

class AdminRecettesValidationController extends Controller{
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
        $recettes = new RecetteProposerUser();
        $this->setLayout('auth');
        $recettes = $recettes->getAllWhere(['status'=>'0']);
        return Application::$app->router->renderOnlyView('admin_recettes_validation',[
            'recettes'=>$recettes,
        ]);
    }
    
    public function add($request){
        $nutritions = new Nutrition();
        $nutritions = $nutritions->getAll();
        $recette = new Recette();
        $this->setLayout('auth');
        if($request->isPost()){
            // print_r($_FILES);
            // echo '<br/>';
            $imagePath = $recette->imageUpload();
            $recetteData = $request->getBody();
            $recetteData += array('image'=>$imagePath);
            $recette->loadData($recetteData);
            $etapes = $request->getEtapesArray();
            $ingrediants = $request->getIngrediantsArray();
            $quantitys = $request->getQuantitysArray();
            // print_r($ingrediants);
            // print_r($quantitys);
            if($recette->validate() && $recette->save()){
                $nom = $recette->nom;
                $recette = Recette::findOne(['nom'=>$nom]);
                $etape = new Etape();
                foreach ($etapes as $key => $value) {
                   $etape->loadData(['id_recette'=>$recette->id,'description'=>$value]);
                   $etape->save();
                }
                $recetteNutrition = new RecetteNutrition();
                foreach ($ingrediants as $key => $value) {
                    $nutrition = Nutrition::findOne(['nom'=>$value]);
                    $id = $nutrition->id;
                    $recetteNutrition->loadData(['id_recette'=>$recette->id,'id_nutrition'=>$id,'quantity'=>$quantitys[$key]]);
                    $recetteNutrition->save();
                }
                 Application::$app->session->setFlash('success','Recette added successfully');
                 Application::$app->response->redirect('/admin/recettes');
                 exit;
             }
            
        }
        return $this->render('admin_recettes_add',[
            'model'=>$recette,
            'nutritions'=>$nutritions,
        ]);
    }


    public function valider($request){
        $this->setLayout('auth');
        $recette = new RecetteProposerUser();
        if($request->isGet()){
            $recette = RecetteProposerUser::findOne(['id'=>$request->getBody()['id']]);
            if($recette->valider()){
                // print_r($request->getBody());
                $nom = $recette->nom;
                $id = $request->getBody()['id'];
                $recette = Recette::findOne(['nom'=>$nom]);
                $etapes = RecettesProposerEtapes::getAllWhere(['id_recette'=>$id]);
                $ingrediants = RecettesProposeesNutritions::getAllWhere(['id_recette'=>$id]);
                $etapesSauv = new Etape();
                // print_r($etapes);
                // print_r($ingrediants);
                $ingrediantsSauv = new RecetteNutrition();
                foreach ($etapes as $etape) {
                    $etapesSauv->loadData(['id_recette'=>$recette->id,'description'=>$etape['description']]);
                    $etapesSauv->save();
                }
                foreach ($ingrediants as $ingrediant) {
                    $ingrediantsSauv->loadData(['id_recette'=>$recette->id,'id_nutrition'=>$ingrediant['id_nutrition'],'quantity'=>$ingrediant['quantity']]);
                    // print_r($ingrediant['quantity']);
                    // print_r($ingrediant['id_nutrition']);
                    $ingrediantsSauv->save();
                }
                Application::$app->session->setFlash('success','edited successfully Tanks for registering');
                Application::$app->response->redirect('/admin/recettes_validation');
                exit;
            }
        }
        if($request->isGet()){
            $id = $request->getBody()['id']; 
            $recette = Recette::findOne(['id'=>$id]);
            return $this->render('admin_recettes_edit',[
                'model'=>$recette,
            ]);
        }
    }



    public function supprimer($request){
        //$this->setLayout('auth');
        $recette = new RecetteProposerUser();
        if($request->isGet()){
            $recette->loadData($request->getBody());
            if($recette->delete()){
                Application::$app->session->setFlash('success','deleted successfully Tanks for registering');
                Application::$app->response->redirect('/admin/recettes_validation');
                exit;
            }
        }
    }

    public function view($request){
        // $recette = new Recette();
        // $this->setLayout("auth");
        // $id = $request->getBody()['id']; 
        // $recette = Recette::findOne(['id'=>$id]);
        // $etapes =  Etape::getAllWhere(['id_recette'=>$recette->id]);
        // $nutritionsIds =  RecetteNutrition::getAllWhere(['id_recette'=>$recette->id]);
        // $nutritions = array();

        $id = $request->getBody()['id'];
        $recette = Recette::findOne(['id'=>$id]);
        $etapes =  Etape::getAllWhere(['id_recette'=>$recette->id]);
        $nutritionsIds =  RecetteNutrition::getAllWhere(['id_recette'=>$recette->id]);
        $nutritions = array();
        // print_r($nutritions);
        foreach ($nutritionsIds as $nutritionsId) {
            $nutritions[]= Nutrition::findOne(['id'=>$nutritionsId['id_nutrition']]);
        }
        // print_r($nutritions);
        // foreach ($nutritionsIds as $nutritionsId) {
        //     $nutritions[]= Nutrition::findOne(['id'=>$nutritionsId['id_nutrition']]);
        // }
        $recetteIngrediants = Nutrition::getIngrediantsOfRecette($recette->id);
        // print_r($nutritions);
        return Application::$app->router->renderOnlyView('admin_recettes_view',[
            'recette'=>$recette,
            'ingrediants'=>$recetteIngrediants,
            'etapes'=>$etapes,
        ]);
    }
}