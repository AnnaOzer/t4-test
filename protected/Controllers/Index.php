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
        echo $persons[0]->lastName;
        echo $persons[1]->lastName;
        echo $persons[2]->lastName;
    }
}
