<?php

namespace App\Controllers;

use App\Models\Article;
use T4\Mvc\Controller;

class Panelarticles
    extends Controller
{

    public function actionDefault()
    {
        $this->data->items = Article::findAll();
    }

}