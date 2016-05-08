<?php

namespace App\Components;

use T4\Core\Std;

class Test
    extends Std
{
    protected function setFoo($value)
    {
        $this->__data['foo'] = $value  . '!!!';
    }
} 