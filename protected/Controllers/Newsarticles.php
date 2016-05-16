<?php


namespace App\Controllers;
use App\Models\News;
use T4\Mvc\Controller;


class Newsarticles
    extends Controller
{

    public function actionDefault() {
        echo "Some";
    }

    public function actionAll() {
        $this->data->articles = News::findAll();
    }

    public function actionOne($id) {
        $this->data->article = News::findOne($id);
    }

    public function actionLast() {
        $this->data->article = News::findOne(3);
    }
}