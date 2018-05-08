<?php

use yii\db\Migration;

/**
 * Handles the creation of table `banners`.
 */
class m180508_022309_create_banners_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('banners', [
            'id' => $this->primaryKey(),
            'url' => $this->string()->notNull(),
            'image' => $this->string()->notNull()->defaultValue('No image'),
            'status' => $this->integer()->notNull()->defaultValue(1)->comment('0 - ẩn , 1 - Active , 2 - Đã xóa '),
            'create_at' => $this->integer()->notNull(),
            'create_by' => $this->string()->notNull(),
            'update_at' => $this->integer()->notNull(),
            'update_by' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('banners');
    }
}
