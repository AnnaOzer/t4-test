<?php

namespace App\Controllers;

use T4\Dbal\QueryBuilder;
use T4\Mvc\Controller;



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
            ->offset(100)
            ->limit(10);

        echo $query->getQuery('mysql'); // SELECT * FROM `persons` AS t1 WHERE age>18 LIMIT 100, 10
        die;
    }
}
