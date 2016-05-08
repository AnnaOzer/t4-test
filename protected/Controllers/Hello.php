<?php

namespace App\Controllers;


use T4\Mvc\Controller;

class Hello
    extends Controller
{
    public function actionWorld()
    {
        // это присваивание и есть передача данных в шаблон
        $this->data->foo = 'bar';
}
}

