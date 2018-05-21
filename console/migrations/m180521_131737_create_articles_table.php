<?php

use yii\db\Migration;

/**
 * Handles the creation of table `articles`.
 */
class m180521_131737_create_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->defaultValue(''),
            'body' => $this->text()->notNull()->defaultValue(''),
            'image'=> $this->string()->notNull()->defaultValue(''),
            'slug' => $this->string()->notNull()->defaultValue(''),
            'create_at' => $this->integer()->notNull(),
            'update_at' => $this->integer()->notNull(),
            'create_by' => $this->string()->notNull(),
            'update_by' => $this->string()->notNull()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('articles');
    }
}
