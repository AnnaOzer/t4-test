<?php

namespace App\Controllers;

use T4\Core\Config;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $config = new Config(['foo'=>'bar', 'baz'=>42]);
        var_dump($config->foo); // string(3) "bar"

        die;
    }


}