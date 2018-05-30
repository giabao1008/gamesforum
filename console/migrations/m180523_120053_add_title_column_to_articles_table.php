<?php

use yii\db\Migration;

/**
 * Handles adding title to table `articles`.
 */
class m180523_120053_add_title_column_to_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('articles', 'articles', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('articles', 'articles');
    }
}
