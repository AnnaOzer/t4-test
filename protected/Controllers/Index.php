<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Index
    extends Controller
{

    protected function beforeAction($action)
    {
        echo 'Before!';
        return true;

    }

    public function actionDefault()
    {
        echo 'Test'; // ничего не выведет
    }

    public function afterAction($action)
    {
        echo 'After!';
    }
}


// Before!TestAfter!