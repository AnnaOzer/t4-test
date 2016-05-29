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
        $persons = Person::findAll();
        $persons->setAge(12);
        $persons->save();
    }
}
