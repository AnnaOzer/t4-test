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
        // получил объект
        $person = Person::findByPK(3);

        // с объектом что-то сделал
        $person->age = 45;

        // сохранил в БД
        $person->save();
    }
}
