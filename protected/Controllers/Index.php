<?php

namespace App\Controllers;

use T4\Mvc\Controller;
use T4\Mvc\Route;

class Index
    extends Controller
{
    public function actionDefault()
    {
        $route = new Route('/Shop/Goods/One');
        echo $route; // /Shop/Goods/One
        echo $route->controller; // Goods
        echo $route->action; // One
        echo $route->params; //  ///
        echo $route->module; // Shop
        die;

}}


