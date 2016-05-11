<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Index
    extends Controller
{



    public function actionDefault()
    {
        var_dump( $this->app->db->default->execute('SELECT * FROM news') );
        die;
    }


}

// SQLSTATE[HY000] [1049] Unknown database 't4'
