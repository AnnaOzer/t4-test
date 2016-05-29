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
        $sth = $conn->query('SELECT * FROM persons');

        var_dump($sth);
        // object(T4\Dbal\Statement)#44 (1) { ["queryString"]=> string(21) "SELECT * FROM persons" }

        var_dump($sth->fetchAll());
        /*
        array(2) { [0]=> array(8)
        { ["__id"]=> string(1) "1" [0]=>
        string(1) "1" ["firstName"]=> string(9) "Иван " [1]=> string(9) "Иван " ["lastName"]=> string(12)
         "Иванов" [2]=> string(12) "Иванов" ["age"]=> string(2) "42" [3]=> string(2) "42" } [1]=>
        'array(8) { ["__id"]=> string(1) "2" [0]=> string(1) "2" ["firstName"]=>
        string(19) "Екатерина " [1]=> string(19) "Екатерина " ["lastName"]=> string(16) "Сидорова"
        [2]=> string(16) "Сидорова" ["age"]=> string(2) "18" [3]=> string(2)
        */

        die;
    }
}
