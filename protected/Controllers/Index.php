<?php

namespace App\Controllers;

use App\Components\Test;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $obj = new Test(['foo' => 'bar', 'baz'=> 42]);


        echo $obj->foo;
        echo $obj->baz;

        // bar42
        die;


    }


}