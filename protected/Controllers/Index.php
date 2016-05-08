<?php

namespace App\Controllers;

use App\Components\Test;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $obj = new Test;


        $obj->foo->bar->baz = 42;
        var_dump($obj);

        die;


    }


}