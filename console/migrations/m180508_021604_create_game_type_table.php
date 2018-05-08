<?php

use yii\db\Migration;

/**
 * Handles the creation of table `game_type`.
 */
class m180508_021604_create_game_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('game_type', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'logo' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('game_type');
    }
}
