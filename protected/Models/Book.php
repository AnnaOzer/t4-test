<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Book
 * @package App\Models
 *
 * @property string $title
 * @property string $birthday
 * @property \T4\Core\Collection|\App\Models\Author[] $authors

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
            'authors' => ['type' => self::MANY_TO_MANY, 'model' => Author::class],
        ]
    ];
} 