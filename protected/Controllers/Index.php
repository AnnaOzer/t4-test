<?php

namespace App\Controllers;

use T4\Core\Std;
use T4\Mvc\Controller;
use T4\Mvc\Route;

class Params
extends Std {}
class Index
    extends Controller
{
    public function actionDefault(Params $ids)
    {
        var_dump($ids);
        die;
    }


}
// http://t4-test/?ids[]=42&ids[]=678&ids[]=586
/* object(App\Controllers\Params)#48 (1)
    { ["__data":protected]=> array(3) { [0]=> string(2) "42" [1]=> string(3) "678"
        [2]=> string(3) "586" } }
*/

// http://t4-test/?ids[foo]=42&ids[bar]=678&ids[baz]=586
/* object(App\Controllers\Params)#48 (1) { ["__data":protected]=> array(3)
{ ["foo"]=> string(2) "42" ["bar"]=> string(3)
"678" ["baz"]=> string(3) "586" } }
*/
