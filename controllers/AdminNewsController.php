<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\Recette;
use app\models\Etape;
use app\models\NewsParagraphes;
use app\models\NewsImages;
use app\models\News;
use app\core\middlewares\AdminAuthMiddleware;

class AdminNewsController extends Controller{
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
        $news = new News();
        $news = $news->getAll();
        return Application::$app->router->renderOnlyView('admin_news',[
             'news'=>$news,
        ]);
    }
    
    public function add($request){
        $news = new News();
        $this->setLayout('auth');
        if($request->isPost()){
            $paragraphes = $request->getParagraphesArray();
            $newsData = $request->getBody();
            $image = $news->imageUpload();
            $newsData += array('image'=>$image);
            $news->loadData($newsData);
            if($news->validate() && $news->save()){
                $images = $news->imagesUpload();
                $news = News::findOne(['titre'=>$news->titre]);
                print_r($news);
                $newsParagraphes = new NewsParagraphes();
                foreach ($paragraphes as $paragraphe) {
                    $newsParagraphes->loadData(['id_news'=>$news->id,'paragraphe'=>$paragraphe]);
                    $newsParagraphes->save();
                }
                $newsImages = new NewsImages();
                foreach ($images as $image) {
                    $newsImages->loadData(['id_news'=>$news->id,'image'=>$image]);
                    $newsImages->save();
                }
            }
            Application::$app->session->setFlash('success','Recette added successfully');
            Application::$app->response->redirect('/admin/news');
            exit;    
        }
        return $this->render('admin_news_add',[
            'model'=>$news,
        ]);
    }


    public function edit($request){
        $this->setLayout('auth');
        $recette = new Recette();
        if($request->isPost()){
            $recette->loadData($request->getBody());
            if($recette->edit()){
                Application::$app->session->setFlash('success','edited successfully Tanks for registering');
                Application::$app->response->redirect('/admin/news');
                exit;
            }
        }
        if($request->isGet()){
            $id = $request->getBody()['id']; 
            $news = News::findOne(['id'=>$id]);
            return $this->render('admin_news_edit',[
                'model'=>$news,
            ]);
        }
    }



    public function delete($request){
        //$this->setLayout('auth');
        $news = new News();
        if($request->isGet()){
            $news = News::findOne(['id'=>$request->getBody()['id']]);
            if($news->delete()){
                Application::$app->session->setFlash('success','deleted successfully Tanks for registering');
                Application::$app->response->redirect('/admin/news');
                exit;
            }
        }
    }

    public function view($request){
        $recette = new Recette();
        $this->setLayout("auth");
        $id = $request->getBody()['id']; 
        $news= News::findOne(['id'=>$id]);
        $paragraphes =  NewsParagraphes::getAllWhere(['id_news'=>$news->id]);
        $images =  NewsImages::getAllWhere(['id_news'=>$news->id]);
        return $this->render('admin_news_view',[
            'news'=>$news,
            'paragraphes'=>$paragraphes,
            'images'=>$images,
        ]);
    }
}