<?php

namespace App\Controllers;


use App\Models\Article;
use App\Models\News;
use T4\Mvc\Controller;



class Index
    extends Controller
{
    public function actionDefault() {
        $this->data->article = News::findOne(1);
    }
}
