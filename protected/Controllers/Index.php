<?php

namespace App\Controllers;

use T4\Core\Config;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        // $config = new Config(ROOT_PATH_PROTECTED . '/config.php');
        $config = $this->app->config;
        $this->data->name = $config->name;

    }


}

/*
 * https://github.com/AnnaOzer/t4-test/blob/master/protected/Controllers/Index.php#L14 - можно и так,
 * а можно и $this->app->config, что проще*/