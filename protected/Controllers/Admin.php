<?php

namespace App\Controllers;


use App\Models\Person;
use T4\Mvc\Controller;

class Admin
    extends Controller
{

    public function actionDefault()
    {
        $this->data->items = Person::findAll();
    }

    public function actionDelete($id)
    {
        $item = Person::findByPk($id);
        $item->delete();
        $this->redirect('/admin/');
    }
} 