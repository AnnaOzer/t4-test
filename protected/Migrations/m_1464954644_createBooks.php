<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1464954644_createBooks
    extends Migration
{

    public function up()
    {
        $this->createTable('books', [
            'title' => ['type' => 'string'],
            '__author_id' => ['type' => 'link'],
            'published' => ['type' => 'date']
        ]);
    }

    public function down()
    {
        $this->dropTable('books');
    }
    
}