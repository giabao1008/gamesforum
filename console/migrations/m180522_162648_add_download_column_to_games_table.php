<?php

use yii\db\Migration;

/**
 * Handles adding download to table `games`.
 */
class m180522_162648_add_download_column_to_games_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('games', 'download', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('games', 'download');
    }
}
