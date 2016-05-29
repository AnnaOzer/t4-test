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
        $conn = $this->app->db->default;

        var_dump($conn);
        die;

    }
}
