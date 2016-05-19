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
        return $news = include __DIR__ . '/../Db/newsfile.php';
    }

    public static function findOne($id)
    {
        $news = include __DIR__ . '/../Db/newsfile.php';
        return $news[$id];
    }

    public static function findLast()
    {
        $news = include __DIR__ . '/../Db/newsfile.php';
        return end($news);
    }

    public function addOne(Article $art)
    {
        $smallDatabase = new Config(ROOT_PATH_PROTECTED . '/Db/newsfile.php');
        $smallDatabase[] = $art;
        var_dump($smallDatabase);
        die;
        $smallDatabase->save();
    }

    public function __construct() {

    }
} 