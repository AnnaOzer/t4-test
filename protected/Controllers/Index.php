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
        $book = Book::findByTitle('Война и мир');
        $book->authors->add(
            Author::findByName('Михаил Булгаков')
        );
        $book->save();

        var_dump($book->authors);
        die;
    }
}
