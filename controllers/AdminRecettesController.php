<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\Recette;
use app\models\RecetteProposerUser;
use app\models\Etape;
use app\models\Pourcentage;
use app\models\RecettesProposerEtapes;
use app\models\RecettesProposeesNutritions;
use app\models\RecetteNutrition;
use app\models\UserRecetteFavori;
use app\models\Nutrition;
use app\core\middlewares\AdminAuthMiddleware;

class AdminRecettesController extends Controller{
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
        $recettes = new Recette();
        $this->setLayout('auth');
        $recettes = $recettes->getAll();

        return Application::$app->router->renderOnlyView('admin_recettes',[
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
                    $nutrition = Nutrition::findOne(['id'=>$value]);
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


    public function edit($request){
        $this->setLayout('auth');
        $recette = new Recette();
        if($request->isPost()){
            $recette->loadData($request->getBody());
            if($recette->edit()){
                // print_r($request->getBody());
                Application::$app->session->setFlash('success','edited successfully Tanks for registering');
                Application::$app->response->redirect('/admin/recettes');
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



    public function delete($request){
        //$this->setLayout('auth');
        $recette = new Recette();
        if($request->isGet()){
            $recette->loadData($request->getBody());
            if($recette->delete()){
                Application::$app->session->setFlash('success','deleted successfully Tanks for registering');
                Application::$app->response->redirect('/admin/recettes');
                exit;
            }
        }
    }

    public function view($request){
        $id = $request->getBody()['id'];
        if(isset($_GET['recette_proposer'])){
            $recette = RecetteProposerUser::findOne(['id'=>$id]);
        }
        else{
            $recette = Recette::findOne(['id'=>$id]);
        }

        if(isset($_GET['recette_proposer'])){
            $etapes =  RecettesProposerEtapes::getAllWhere(['id_recette'=>$recette->id]);
        }
        else{
            $etapes =  Etape::getAllWhere(['id_recette'=>$recette->id]);
        }

        if(isset($_GET['recette_proposer'])){
            $nutritionsIds =  RecettesProposeesNutritions::getAllWhere(['id_recette'=>$recette->id]);
        }
        else{
            $nutritionsIds =  RecetteNutrition::getAllWhere(['id_recette'=>$recette->id]);
        }
        $nutritions = array();
        foreach ($nutritionsIds as $nutritionsId) {
            $nutritions[]= Nutrition::findOne(['id'=>$nutritionsId['id_nutrition']]);
        }
        $recetteFavori = false;
        if(!Application::isGuest()){
            $userRecetteFavori = UserRecetteFavori::findFavori(Application::$app->user->id ,$recette->id);
            if($userRecetteFavori){
                $recetteFavori =true;
            }
        }
        if($request->isPost()){
            $userRecetteFavori = new UserRecetteFavori();
            $userRecetteFavori->loadData(['id_user'=>Application::$app->user->id  ,  'id_recette'=>$recette->id]);
            if($recetteFavori == false){
                $userRecetteFavori->save();
                $recetteFavori =true;
            }else{
                $userRecetteFavori->delete();
                $recetteFavori = false;
            }
        }
        if(isset($_GET['recette_proposer'])){
            $recetteIngrediants = Nutrition::getIngrediantsOfRecetteProposer($recette->id);
        }
        else{
            $recetteIngrediants = Nutrition::getIngrediantsOfRecette($recette->id);
        }
        return Application::$app->router->renderOnlyView('admin_recettes_view',[
            'recette'=>$recette,
            'ingrediants'=>$recetteIngrediants,
            'etapes'=>$etapes,
            'recetteFavori'=>$recetteFavori,
        ]);
    }
}