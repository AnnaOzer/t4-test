<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Index
    extends Controller
{

    protected function access($action)
    {
        echo $action;
        die;
    }

    public function actionDefault()
    {
        $config = $this->app->config;
        $this->data->name = $config->name;

    }


}
// Default
