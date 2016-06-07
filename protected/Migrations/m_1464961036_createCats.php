<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1464961036_createCats
    extends Migration
{

    public function up()
    {
        $this->createTable('cats', [
            'title' => ['type' => 'string'],
        ], [], ['tree']);
    }

    public function down()
    {
        $this->dropTable('cats');
    }
    
}