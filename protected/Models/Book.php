<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Book
 * @package App\Models
 *
 * @property string $title
 * @property string $birthday
 * @property \App\Models\Author $author

 */

class Book
    extends Model
{
    static protected $schema = [

        'columns' => [
            'title' => ['type' => 'string'],
            'published' => ['type' => 'string']
        ],
        'relations' => [
            'author' => ['type' => self::BELONGS_TO, 'model' => Author::class],
        ]
    ];
} 