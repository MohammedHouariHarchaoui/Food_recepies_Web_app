<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

use app\core\Request;
use app\models\ContactForm;
use app\models\News;
use app\models\NewsImages;
use app\models\NewsParagraphes;

class NewsController extends Controller{

    public function news($request){
        $news = new News();
        $news = $news->getAll();
        return $this->render('news',[
            'news'=>$news,
        ]);
    }

    public function news_view($request){
        $id = $request->getBody()['id'];
        $news = News::findOne(['id'=>$id]);
        $images = NewsImages::getAllWhere(['id_news'=>$id]);
        $paragraphes = NewsParagraphes::getAllWhere(['id_news'=>$id]);
        return $this->render('news_view',[
            'news'=>$news,
            'paragraphes'=>$paragraphes,
            'images'=>$images,
        ]);
    }
}