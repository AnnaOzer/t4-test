<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Index
    extends Controller
{

    protected function access($action)
    {
        if($this->app->user->hasRole('admin')) {
            return true;
        }
        return false;

    }

    public function actionDefault()
    {
        $config = $this->app->config;
        $this->data->name = $config->name;

    }


}
// Access denied