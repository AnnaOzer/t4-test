<?php

namespace App\Controllers;


use T4\Mvc\Controller;

class Hello
    extends Controller
{
    public function actionWorld()
    {
        echo 'World!';
        die;
    }
}