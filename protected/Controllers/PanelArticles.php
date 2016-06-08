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

    public function actionAdd()
    {
    }
    
    public function actionSave($article)
    {
        $item = (new Article())->fill($article)->save();
        $this->redirect('/panelarticles/');
    }
    
    public function actionEdit($id) 
    {
        $item = Article::findByPK($id);
        $this->data->item = $item;
    }

    public function actionUpdate($id, $article)
    {
        $item = (Article::findByPK($id))->fill($article)->save();
        $this->redirect('/panelarticles/');
    }
    
    public function actionDelete($id)
    {
        $article = Article::findByPK($id);
        if(!empty($article)) {
            $article->delete(); 
        }
        $this->redirect('/panelarticles/');
    }

}