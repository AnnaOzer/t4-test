<?php

namespace App\Controllers;

use T4\Dbal\Connection;
use T4\Mvc\Controller;
use T4\Core\Config;


class Index
    extends Controller
{
    public function actionDefault()
    {
        // конфиг
        $config = new Config([
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '',
            'dbname' => 't4test'
        ]);

        // соединение
        $conn = new Connection($config);

        var_dump($conn);
        die;

    }
}
