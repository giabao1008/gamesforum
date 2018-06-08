<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `articles_column_to_articles`.
 */
class m180608_040214_drop_articles_column_to_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('articles_column_to_articles');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('articles_column_to_articles', [
            'id' => $this->primaryKey(),
            'articles' => $this->string(),
        ]);
    }
}
