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
        $person = Person::findByPk(5);
        $person->delete();
        $person->isDeleted(); // нет вывода
    }
}
