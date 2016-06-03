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

    public function actionAdd()
    {
    }

    public function actionSave(Person $person)
    {
        $person->save();
        $this->redirect('/admin/');
    }

    public function actionDelete($id)
    {
        $item = Person::findByPk($id);
        if (!empty($item)) {
            $item->delete();
        }
        $this->redirect('/admin/');
    }
} 