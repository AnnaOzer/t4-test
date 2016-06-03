<?php

namespace App\Controllers;

use App\Models\Book;
use T4\Dbal\QueryBuilder;
use T4\Mvc\Controller;
use App\Models\Person;



class Index
    extends Controller
{
    public function actionDefault()
    {
        $book = Book::findByPK(1);
        var_dump($book->author->name);
        die;
    }
}
