<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use T4\Dbal\QueryBuilder;
use T4\Mvc\Controller;




class Index
    extends Controller
{
    public function actionDefault()
    {
        $cat = new Category();
        $cat->title = 'Книги';
        $cat->save();
        die;
    }
}
