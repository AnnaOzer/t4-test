<?php
// php protected/t4.php /migrate/create --name=createArticles
// php protected\t4.php /migrate
namespace App\Migrations;

use T4\Orm\Migration;

class m_1464535643_createArticles
    extends Migration
{

    public function up()
    {
        $this->createTable('articles', [
            'title' => ['type' => 'string',],
            'text' => ['type' => 'text', 'length' =>'long',],
            'published' => ['type' => 'date',],
            ]
        );
    }

    public function down()
    {
        $this->dropTable('articles');
    }
    
}