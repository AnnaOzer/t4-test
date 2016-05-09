<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class About
    extends Controller
{

    public function actionDefault()
    {
        $this->data->title = 'О нас';
        $this->data->text = 'Мы гениальная команда и сделаем всё и навсегда.';
    }


}