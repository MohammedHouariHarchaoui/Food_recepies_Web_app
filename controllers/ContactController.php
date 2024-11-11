<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\ContactForm;

class ContactController extends Controller{
    public function contact($request){
        $contact = new ContactForm();
        if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('Success','Tanks for contacting us');
                Application::$app->response->redirect('/contact');
            }
        }
        return $this->render('contact',[
            'model'=>$contact,
        ]);
    }
}