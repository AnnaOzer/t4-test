<?php

namespace App\Controllers;

use T4\Core\Std;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $obj = new Std();
        $obj->foo = 'bar';
        $obj->baz = 42;

        echo $obj->foo;
        die;

    }


}