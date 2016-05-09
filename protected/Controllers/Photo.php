<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Photo
    extends Controller
{

    public function actionDefault()
    {
        $this->data->title = 'Фотографии';
        $this->data->text = 'Просмотр всех фотографий';
    }

    public function actionLast()
    {
        $this->data->title = 'Последняя загруженная фотография';
        $this->data->text = 'Самая свежая фото';
    }

}