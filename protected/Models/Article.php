<?php

namespace App\Models;

use T4\Orm\Model;

class Article
    extends Model
{
    static protected $schema = [
            'title' => ['type' => 'string',],
            'text' => ['type' => 'text', 'length' =>'long',],
            'published' => ['type' => 'date',],
    ];
} 