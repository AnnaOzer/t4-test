<?php

namespace App\Controllers;


use T4\Mvc\Controller;

class Hello
    extends Controller
{
    public function actionDefault()
    {
        echo 'World!';
        die;
    }
}