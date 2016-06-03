<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Author
 * @package App\Models
 *
 * @property string $name
 * @property string $birthday

 */

class Author
    extends Model
{
    static protected $schema = [

        'columns' => [
            'name' => ['type' => 'string'],
            'birthday' => ['type' => 'date']
        ],
        'relations' => [
            'books' => ['type' => self::MANY_TO_MANY, 'model' => Book::class],
        ]
    ];
} 