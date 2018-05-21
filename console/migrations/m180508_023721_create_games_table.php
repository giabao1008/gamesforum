<?php

use yii\db\Migration;

/**
 * Handles the creation of table `games`.
 * Has foreign keys to the tables:
 *
 * - `game_type`
 */
class m180508_023721_create_games_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('games', [
            'id' => $this->primaryKey(),
            'game_type' => $this->integer()->notNull(),
            'name' => $this->string()->notNull()->unique()->defaultValue('undefine'),
            'logo' => $this->string()->notNull()->defaultValue('undefine'),
            'slug'=>$this->string()->notNull()->defaultValue('undefine'),
            'description' => $this->string()->notNull(),
            'author' => $this->string()->defaultValue('Anonymous'),
            'require' => $this->string()->notNull()->comment('Cấu hình tối thiểu'),
            'views_count' => $this->integer()->defaultValue(0),
            'is_Hot' => $this->integer()->defaultValue(0)->comment('Là game hot hay không ? 1 -  có , 0 - không'),
            'create_at' => $this->integer(),
            'update_at' => $this->integer(),
            'status' => $this->integer()->defaultValue(1),  // 0 - Ẩn , 1 - Hiện
            'create_by' => $this->string()->notNull(),
        ]);

        // creates index for column `game_type`
        $this->createIndex(
            'idx-games-game_type',
            'games',
            'game_type'
        );

        // add foreign key for table `game_type`
        $this->addForeignKey(
            'fk-games-game_type',
            'games',
            'game_type',
            'game_type',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `game_type`
        $this->dropForeignKey(
            'fk-games-game_type',
            'games'
        );

        // drops index for column `game_type`
        $this->dropIndex(
            'idx-games-game_type',
            'games'
        );

        $this->dropTable('games');
    }
}
