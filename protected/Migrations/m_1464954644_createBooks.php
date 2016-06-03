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
            'published' => ['type' => 'date'],
        ]);
        $this->createTable('authors_to_books', [
           '__author_id' => ['type' => 'link'],
           '__book_id' => ['type' => 'link'],
        ]);
    }

    public function down()
    {
        $this->dropTable('authors_to_books');
        $this->dropTable('books');
    }
    
}