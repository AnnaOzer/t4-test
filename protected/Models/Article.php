<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Article
 * @package App\Models
 *
 * @property string $title
 * @property string $text
 * @property string $published
 */

class Article
    extends Model
{
    static protected $schema = [
            'title' => ['type' => 'string',],
            'text' => ['type' => 'string',],
            'published' => ['type' => 'date',],
    ];
} 