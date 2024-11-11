<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\Recette;

class SaisonController extends Controller{
    public function saison($request){
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
        if($request->isPost()){
            $saison = $request->getBody()['saison'];
            $recettes = Recette::getAllWhere(['saison'=>$saison]);
        }
        return $this->render('saison',[
            'recettes'=>$recettes,
        ]);
    }
    
    // public function contact($request){
    //     $contact = new ContactForm();
    //     if($request->isPost()){
    //         $contact->loadData($request->getBody());
    //         if($contact->validate() && $contact->send()){
    //             Application::$app->session->setFlash('Success','Tanks for contacting us');
    //             Application::$app->response->redirect('/contact');
    //         }
    //     }
    //     return $this->render('contact',[
    //         'model'=>$contact,
    //     ]);
    // }
}