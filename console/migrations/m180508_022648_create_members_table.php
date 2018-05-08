<?php

use yii\db\Migration;

/**
 * Handles the creation of table `members`.
 */
class m180508_022648_create_members_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('members', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'avatar' => $this->string()->notNull(),
            'create_at' => $this->integer()->notNull(),
            'update_at' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull()->defaultValue(1)->comment('0- khóa / 1 Active')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('members');
    }
}
