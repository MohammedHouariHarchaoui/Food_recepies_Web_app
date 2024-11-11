<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\ContactForm;
use app\models\Nutrition;
use app\models\Recette;
use app\models\RecetteProposerUser;
use app\models\Etape;
use app\models\Pourcentage;
use app\models\RecetteNote;
use app\models\RecettesProposerEtapes;
use app\models\RecettesProposeesNutritions;
use app\models\RecetteNutrition;
use app\models\UserRecetteFavori;


class IdeeRecetteController extends Controller{
    public function idee_recette($request){
        $nutritions = new Nutrition();
        $recettes = new Recette();
        $month  = date("m");
        $day = date("d");
        $actualSaison = '';
        if($month < 3 || ($month = 3 && $day<=21)){
            $actualSaison = 'hiver';
        }elseif ($month < 6 || ($month = 6 && $day<=21)) {
            $actualSaison = 'printemps';
        }elseif ($month < 9 || ($month = 9 && $day<=21)) {
            $actualSaison = 'ete';
        }elseif ($month < 12 || ($month = 12 && $day<=21)) {
            $actualSaison = 'automne';
        }
        $recettes = $recettes->getAllWhere(['saison'=>$actualSaison]);
        $nutritions = $nutritions->getAll();
        if($request->isPost()){
            $pourcentage = new Pourcentage();
            $recettes = new Recette();
            $recettes = $recettes->getAll();
            $pourcentage = $pourcentage->getAll()[0];
            $selectedRecettes = array();
            $ingrediants = $request->getIngrediantsArray();
            $quantitys = $request->getQuantitysArray();
            $recherche = array();
            foreach ($ingrediants as $key => $value) {
                $recherche[] = array(
                    'id'=>$value ,
                    'quantity'=> $quantitys[$key],
                );
            }
            $recherches = $recherche;
            // print_r($recherches);
            // echo '<br/>';
            // print_r(count($recherches));
            // echo '<br/>';
            foreach ($recettes as $recette) {
                $recetteIngrediants = new RecetteNutrition();
                // $recetteIngrediants = $recetteIngrediants->getAllWehre($recette['id']);
                $recetteIngrediants = RecetteNutrition::getAllWhere(['id_recette'=>$recette['id']]);
                // print_r($recetteIngrediants);
                $totale = count($recetteIngrediants);
                $count = 0;
                $recetteIngrediants = array($recetteIngrediants);
                foreach ($recetteIngrediants[0] as $recetteIngrediant) {
                    // print_r($recherche);
                    // echo 'recette'.recette['id'];
                    // echo '<br/>';
                    // print_r($recetteIngrediant);
                    foreach ($recherches as $recherche) {
                        // echo 'recette'.$recette['id'];
                        // echo '<br/>';
                        // echo 'checking variables';
                        // echo 'id recherche'.$recherche['id'];
                        // echo 'id_nutrition'.$recetteIngrediant['id_nutrition'];
                        // echo '<br/>';
                        if($recherche['id'] == $recetteIngrediant['id_nutrition']){
                            // echo 'counting';
                            // echo '<br/>';
                            $count++;
                        }
                    }
                }
                // echo 'resultat recetten';
                // echo '<br/>';
                // echo $count;
                // echo '<br/>';
                // echo $totale;
                // echo '<br/>';
                // echo $recette['id'];
                // echo '<br/>';
                // echo $count/$totale;
                // echo '<br/>';
                $percentage = $count/$totale;
                if($percentage >= $pourcentage['pourcentage']){
                    $selectedRecettes[]= $recette;
                }
            }
            // print_r($selectedRecettes);
            $recettes = $selectedRecettes;
        }
        return $this->render('idee_recette',[
            'nutritions'=>$nutritions,
            'recettes'=>$recettes,
        ]);
    }


    public function recette($request){
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
        return $this->render('idee_recette_recette',[
            'recette'=>$recette,
            'ingrediants'=>$recetteIngrediants,
            'etapes'=>$etapes,
            'recetteFavori'=>$recetteFavori,
        ]);
    }


    public function note($request){
        print_r($request->getBody());
        $id = $request->getBody()['id'];
        $note = $request->getBody()['notation'];
           
            $recetteNote = new RecetteNote();
            $recetteNote->loadData(['id_user'=>Application::$app->user->id,'id_recette'=>$id,'note'=>$note]);
            $recetteNote->save();

            Application::$app->session->setFlash('success','Recette added successfully');
            Application::$app->response->redirect("/recette?id=$id");
    
        exit;
    }
}