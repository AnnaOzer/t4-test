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
        $data = $conn->query('SELECT AVG(age) FROM persons')->fetchScalar();

        var_dump($data); // string(7) "30.0000"

        die;
    }
}
