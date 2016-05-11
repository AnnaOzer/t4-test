<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Index
    extends Controller
{



    public function actionDefault()
    {
        var_dump( $this->app->request );

        // http://t4-test/?id=12
        echo $this->app->request->url;

        // t4-test
        echo $this->app->request->url->host;

        // object(T4\Core\Std)#21 (1) { ["__data":protected]=> array(1) { ["id"]=> string(2) "12" } }
        var_dump($this->app->request->get);
        die;
    }


}

/*
object(T4\Http\Request)#19 (1) { ["__data":protected]=> array(5)
{ ["url"]=> object(T4\Core\Url)#20 (1) { ["__data":protected]=> array(6)
{ ["protocol"]=> string(4) "http" ["host"]=> string(7) "t4-test" ["port"]=>
NULL ["path"]=> string(1) "/" ["query"]=> NULL ["fragment"]=> NULL } }
["get"]=> object(T4\Core\Std)#21 (1) { ["__data":protected]=> array(0) { } }
["post"]=> object(T4\Core\Std)#22 (1) { ["__data":protected]=> array(0) { } }
["files"]=> object(T4\Core\Std)#23 (1) { ["__data":protected]=> array(0) { } }
["headers"]=> object(T4\Core\Std)#24 (1) { ["__data":protected]=> array(9) {
["Host"]=> string(7) "t4-test" ["Connection"]=> string(10) "keep-alive" ["Cache-Control"]=>
string(9) "max-age=0" ["Accept"]=>
string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,* /
*;q=0.8" ["Upgrade-Insecure-Requests"]=> string(1) "1"
 * ["User-Agent"]=> string(108) "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36
 * (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36" ["Accept-Encoding"]=> string(19)
 *  "gzip, deflate, sdch" ["Accept-Language"]=> string(35) "ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4"
 * ["Cookie"]=> string(36) "PHPSESSID=49jebk2m74pps3u2matd03lbp7" } } } }
 * */