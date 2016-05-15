<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 13.05.2016
 * Time: 20:28
 */

namespace App\Models;

use T4\Core\Config;

class News
extends Config
{
    public function findAll()
    {
        $news = include __DIR__ . '/../Db/newsfile.php';
        $allNews = [];

        foreach ($news as $new) {

            $obj = new Article;
            $obj->fromArray($new);
            $allNews[] = $obj;
        }

        return $allNews;

    }

    public static function findOne($id)
    {
        $news = include __DIR__ . '/../Db/newsfile.php';
        $oneNew = [];
        foreach ($news as $new) {

            if($new['id'] == $id) {
                $oneNew = $new;
            }
        }

        if (!empty($oneNew)) {
            $obj = new Article();
            $obj->fromArray($oneNew);
            return $obj;
        } else {
            throw new \Exception ('Нет данных');
        }
    }


} 