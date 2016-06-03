<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1464954035_createAuthors
    extends Migration
{

    public function up()
    {
        $this->createTable('authors', [
            'name' => ['type' => 'string'],
            'birthday' => ['type' => 'date']
        ]);
    }

    public function down()
    {
        $this->dropTable('authors');
    }
    
}