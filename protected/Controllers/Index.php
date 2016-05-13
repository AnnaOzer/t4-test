<?php

namespace App\Controllers;

use T4\Mvc\Controller;
use T4\Mvc\Route;

class Index
    extends Controller
{
    public function actionDefault()
    {
        $this->data->name = 'Иванов';

}
}


