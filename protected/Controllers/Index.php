<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;
use T4\Dbal\QueryBuilder;
use T4\Mvc\Controller;




class Index
    extends Controller
{
    public function actionDefault()
    {
        $leo = Author::findByPK(1);
        var_dump($leo->books);
        die;
    }
}
