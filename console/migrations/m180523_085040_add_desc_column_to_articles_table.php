<?php

use yii\db\Migration;

/**
 * Handles adding desc to table `articles`.
 */
class m180523_085040_add_desc_column_to_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('articles', 'desc', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('articles', 'desc');
    }
}
