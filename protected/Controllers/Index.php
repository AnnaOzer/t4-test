<?php

namespace App\Controllers;

use T4\Mvc\Controller;
use T4\Mvc\Route;

class Index
    extends Controller
{
    public function actionDefault($id = 0, $name = null)
    {
        echo 'Id: ' . $id;
        echo 'Name: ' . $name;
        die;
    }


}


