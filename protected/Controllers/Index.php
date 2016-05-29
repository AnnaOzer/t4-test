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

        foreach ($persons as $person)  {
            echo $person->lastName;
        }

        $names = $persons->collect('lastName');
        var_dump($names);// array(3) { [0]=> string(12) "Иванов" [1]=> string(16) "Сидорова" [2]=> string(12) "Рублев" }
    }
}
