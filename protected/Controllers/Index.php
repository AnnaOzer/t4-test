<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Index
    extends Controller
{



    public function actionDefault()
    {
        var_dump( $this->app->config->db->default ); // объект класса Config
        var_dump( $this->app->db ); // объект класса Connections
        die;
    }


}

/*
object(T4\Core\Config)#6 (2) { ["__path":protected]=> NULL ["__data":protected]=> array(5)
    { ["driver"]=> string(5) "mysql"
    ["host"]=> string(9) "127.0.0.1"
    ["user"]=> string(4) "root"
    ["password"]=> string(0) ""
    ["dbname"]=> string(2) "t4" } }

object(T4\Dbal\Connections)#40 (1)
{ ["__data":protected]=> array(1) { ["default"]=> object(T4\Core\Config)#6 (2) { ["__path":protected]=> NULL ["__data":protected]=>
    array(5) { ["driver"]=> string(5) "mysql"
        ["host"]=> string(9) "127.0.0.1"
        ["user"]=> string(4) "root"
        ["password"]=> string(0) ""
        ["dbname"]=> string(2) "t4"
} } } }
*/

