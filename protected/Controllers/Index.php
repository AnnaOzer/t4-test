<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Index
    extends Controller
{



    public function actionDefault()
    {
        $this->app->assets->publishCssFile('/Layouts/test.css');
    }


}

/*
<link rel="stylesheet" href="/Assets/2ec6e48e0d61/test.css">
*/

