<?php

use yii\db\Migration;

class m170424_062446_update_index_of_user extends Migration
{
    public function up()
    {
        $this->dropIndex('user_unique_username', '{{%user}}');
    }

    public function down()
    {
        echo "m170424_062446_update_index_of_user cannot be reverted.\n";
        $this->createIndex('user_unique_username', '{{%user}}', 'username', true);
        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
