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
        var_dump($this->app->db); die;
        /*
        object(T4\Dbal\Connections)#40 (1) { ["__data":protected]=> array(1)
        { ["default"]=> object(T4\Core\Config)#6 (2)
        { ["__path":protected]=> NULL ["__data":protected]=> array(5)
        { ["driver"]=> string(5) "mysql" ["host"]=> string(9) "127.0.0.1" ["user"]=> string(4)
         "root" ["password"]=> string(0) "" ["dbname"]=> string(6) "t4test" } } } }
        */

        $conn = $this->app->db->default;

        var_dump($conn);
        die;

    }
}
