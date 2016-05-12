<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Index
    extends Controller
{
    public function actionDefault()
    {
        $this->app->assets->publish('/Layouts/assets/');
        $this->app->assets->publishCssFile('/Layouts/assets/test.css');
    }


}


