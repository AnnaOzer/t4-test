<?php

namespace App\Controllers;

use T4\Dbal\QueryBuilder;
use T4\Mvc\Controller;
use App\Models\Person;



class Index
    extends Controller
{
    public function actionDefault()
    {
        $query = new QueryBuilder();

        $query
            ->select()
            ->from('persons')
            ->where('age>18')
            ->limit(10);

        $data = Person::findAllByQuery($query);
        var_dump($data);
    }
}
