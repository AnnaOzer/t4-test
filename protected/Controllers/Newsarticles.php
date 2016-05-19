<?php


namespace App\Controllers;
use App\Models\Article;
use App\Models\News;
use T4\Mvc\Controller;
use T4\Core\Config;


class Newsarticles
    extends Controller
{

    public function actionDefault() {
        $this->data->articles = News::findAll();
    }

    public function actionAll() {
        $this->data->articles = News::findAll();
    }

    public function actionOne(int $id=0) {
        $this->data->article = News::findOne($id);
    }

    public function actionLast() {
        $this->data->article = News::findLast();
    }

    public function actionCreate() {

    }
    public function actionAdd(Article $article) {

        $smallDatabase = new Config(ROOT_PATH_PROTECTED . '/Db/newsfile.php');
        $smallDatabase[] = $article;
        $smallDatabase->save();

        $this->redirect('/news/all');

    }
}