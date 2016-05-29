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
        $data = Person::find(['where' => 'age=18']);
        var_dump($data[0]->lastName);
        die;
    }
}
