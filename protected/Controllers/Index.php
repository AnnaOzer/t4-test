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

        /*
         Fatal error: Uncaught Error: Class 'App\Components\Test'
        not found in C:\Server\OpenServer\domains\t4-test\protected\Controllers\Index.php:14
        Stack trace: #0 C:\Server\OpenServer\domains\t4-test\vendor\pr-of-it\t4\framework\Mvc\Controller.php(177):
        App\Controllers\Index->actionDefault() #1
        C:\Server\OpenServer\domains\t4-test\vendor\pr-of-it\t4\framework\Mvc\Application.php(112):
        T4\Mvc\Controller->action('Default', Array) #2
        C:\Server\OpenServer\domains\t4-test\vendor\pr-of-it\t4\framework\Mvc\Application.php(87):
        T4\Mvc\Application->runRoute(Object(T4\Mvc\Route)) #3
        C:\Server\OpenServer\domains\t4-test\public\index.php(12): T4\Mvc\Application->run() #4
        {main} thrown in C:\Server\OpenServer\domains\t4-test\protected\Controllers\Index.php on line 14
         */

        die;

    }


}