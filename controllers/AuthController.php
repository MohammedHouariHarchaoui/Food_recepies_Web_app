<?php 

namespace app\controllers;

use app\core\Controller;
use app\models\User;
use app\models\Login;
use app\core\Application;
use app\core\middlewares\AuthMiddleware;
use app\models\UserRecetteFavori;
use app\models\RecetteProposerUser;
use app\models\Nutrition;
use app\models\RecettesProposerEtapes;
use app\models\RecettesProposeesNutritions;
use app\models\RecetteNutrition;

class AuthController extends Controller{


    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile','logout']));
    }

    public function login($request){
        $this->setLayout('auth');
        $login = new Login();
        if($request->isPost()){
            $login->loadData($request->getBody());
            if($login->validate() && $login->login()){
                Application::$app->session->setFlash('success','welcome again');
                Application::$app->response->redirect('/');
                exit;
            }
            return $this->render('login',['model'=>$login]); 
        }
        return $this->render('login',['model'=>$login]);
    }

    public function register($request){
        $this->setLayout('auth');
        $user = new User();
        if($request->isPost()){
            
            $user->loadData($request->getBody());
            
            if($user->validate() && $user->save() && $user->login()){
                Application::$app->session->setFlash('success','Tanks for registration');
                Application::$app->response->redirect('/');
                exit;
            }
            return $this->render('register',['model'=>$user]);
        }
        
        return $this->render('register',['model'=>$user]);
    }

    public function logout($request){
        Application::$app->logout();
        Application::$app->response->redirect('/');
    }

    public function profile($request){
        $userRecetteFavori = new UserRecetteFavori();
        $recettes = $userRecetteFavori->getUserRecetteFavori(Application::$app->user->id);
        return $this->render('profile',[
            'recettes'=>$recettes,
        ]);
    }

    public function proposer_recette($request){
        $nutritions = new Nutrition();
        $nutritions = $nutritions->getAll();
        $recette = new RecetteProposerUser();
        $this->setLayout('auth');
        if($request->isPost()){
            $imagePath = $recette->imageUpload();
            $recetteData = $request->getBody();
            $recetteData += array('image'=>$imagePath);
            $recette->loadData($recetteData);
            $etapes = $request->getEtapesArray();
            $ingrediants = $request->getIngrediantsArray();
            $quantitys = $request->getQuantitysArray();
            if($recette->validate() && $recette->save()){
                $nom = $recette->nom;
                $recette = RecetteProposerUser::findOne(['nom'=>$nom]);
                $etape = new RecettesProposerEtapes();
                foreach ($etapes as $key => $value) {
                   $etape->loadData(['id_recette'=>$recette->id,'description'=>$value]);
                   $etape->save();
                }
                $recetteNutrition = new RecettesProposeesNutritions();
                foreach ($ingrediants as $key => $value) {
                    $nutrition = Nutrition::findOne(['nom'=>$value]);
                    $id = $nutrition->id;
                    $recetteNutrition->loadData(['id_recette'=>$recette->id,'id_nutrition'=>$id,'quantity'=>$quantitys[$key]]);
                    $recetteNutrition->save();
                }
                 Application::$app->session->setFlash('success','Recette added successfully');
                 Application::$app->response->redirect('/profile');
                 exit;
             }
            
        }
        return $this->render('proposer_recette',[
            'model'=>$recette,
            'nutritions'=>$nutritions,
        ]);
    }

    public function recettes_proposer(){
        $recettes = new RecetteProposerUser();
        $recettes = $recettes->getAll();
        return  $this->render('recettes_proposer',[
            'recettes'=>$recettes,
        ]);
    }
}