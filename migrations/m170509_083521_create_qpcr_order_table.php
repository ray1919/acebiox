<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `qpcr_order`.
 */
class m170509_083521_create_qpcr_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('qpcr_order', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'timestamp' => $this->integer()->notNull(),
            'gene_list' => Schema::TYPE_TEXT,
            'technology' => $this->string()->notNull(),
            'chemistry' => $this->string()->notNull(),
            'application' => $this->string()->notNull(),
            'organism' => $this->string()->notNull(),
            'note' => $this->text()->null(),
            'name' => $this->string()->null(),
            'phone' => $this->string()->null(),
            'email' => $this->string()->notNull(),
            'institution' => $this->string()->null(),
        ]);
        $this->addCommentOnColumn('qpcr_order', 'title', '产品');
        $this->addCommentOnColumn('qpcr_order', 'gene_list', '基因列表');
        $this->addCommentOnColumn('qpcr_order', 'technology', '技术方法');
        $this->addCommentOnColumn('qpcr_order', 'chemistry', '检测方法');
        $this->addCommentOnColumn('qpcr_order', 'application', '应用场景');
        $this->addCommentOnColumn('qpcr_order', 'organism', '物种');
        $this->addCommentOnColumn('qpcr_order', 'note', '备注');
        $this->addCommentOnColumn('qpcr_order', 'name', '联系姓名');
        $this->addCommentOnColumn('qpcr_order', 'phone', '联系电话');
        $this->addCommentOnColumn('qpcr_order', 'email', '邮件地址');
        $this->addCommentOnColumn('qpcr_order', 'institution', '单位');
        $this->addForeignKey('user_fk', 'qpcr_order', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('qpcr_order');
    }
}
