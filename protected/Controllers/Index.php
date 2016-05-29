<?php

namespace App\Controllers;

use App\Models\Person;
use T4\Dbal\Connection;
use T4\Mvc\Controller;
use T4\Core\Config;


class Index
    extends Controller
{
    public function actionDefault()
    {
        $data = Person::findAll();
        var_dump($data); // object(T4\Core\Collection)#46 (1) { [...
        var_dump($data[0]->firstName);
        var_dump($data[0]->lastName);
        die;
    }
}
