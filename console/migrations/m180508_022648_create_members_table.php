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
            'avatar' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'create_at' => $this->integer()->notNull(),
            'update_at' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull()->defaultValue(10)->comment('0- khóa / 10 Active')
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
