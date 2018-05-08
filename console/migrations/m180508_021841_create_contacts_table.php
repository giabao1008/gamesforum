<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contacts`.
 */
class m180508_021841_create_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'subject' => $this->string()->notNull(),
            'body' => $this->text()->notNull(),
            'send_at' => $this->integer(),
            'is_read' => $this->integer()->defaultValue(0)->comment('Đã đọc hay chưa  0 - chưa , 1 - rồi'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contacts');
    }
}
