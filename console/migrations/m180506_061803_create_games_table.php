<?php

use yii\db\Migration;

/**
 * Handles the creation of table `games`.
 */
class m180506_061803_create_games_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('games', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'logo' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'author' => $this->string()->defaultValue('Anonymous'),
            'require' => $this->string()->notNull(),
            'views_count' => $this->integer()->defaultValue(0),
            'is_Hot' => $this->integer()->defaultValue(0)->comment('Là game hot hay không ? 1 -  có , 0 - không'),
            'create_at' => $this->integer(),
            'update_at' => $this->integer(),
            'status' => $this->integer()->defaultValue(1),  // 0 - Ẩn , 1 - Hiện
            'admin' => $this->string()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('games');
    }
}
