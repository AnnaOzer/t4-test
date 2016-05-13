<?php

namespace App\Controllers;


use T4\Mvc\Controller;

class Pages
extends Controller
{
    public function actionOne()
    {
        $this->data->text = 'В лесу родилась елочка';
    }
} 