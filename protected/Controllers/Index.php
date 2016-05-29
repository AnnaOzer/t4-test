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
        // создал объект
        $person = new Person();

        // с объектом что-то сделал
        $person->firstName = 'Андрей';
        $person->lastName = 'Рублев';
        $person->age = 500;

        // сохранил в БД
        $person->save();

        // узнал номер id новой записи
        echo $person->getPk();
    }
}
