<?php

namespace App\Controllers;

use App\Components\Test;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $obj = new Test();
        $obj->foo = 'bar';
        $obj['baz'] = 42;

        foreach ($obj as $k => $v)
        {
            echo $k . '=>' . $v;
            echo '<br>';
        }

        /*
         foo=>bar!!!
         baz=>42
         */

        die;
    }


}