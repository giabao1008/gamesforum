<?php

namespace console\models\articles;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $image
 * @property string $slug
 * @property int $create_at
 * @property int $update_at
 * @property string $create_by
 * @property string $update_by
 * @property string $desc
 * @property string $articles
 * @property int $views_count
 * @property int $like
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['body', 'create_at', 'update_at', 'create_by', 'update_by'], 'required'],
            [['body'], 'string'],
            [['create_at', 'update_at', 'views_count', 'like'], 'integer'],
            [['title', 'image', 'slug', 'create_by', 'update_by', 'desc', 'articles'], 'string', 'max' => 255],
            [['file'],'file','extensions'=>'jpg,png']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'image' => 'Image',
            'slug' => 'Slug',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
            'desc' => 'Desc',
            'articles' => 'Articles',
            'views_count' => 'Views Count',
            'like' => 'Like',
        ];
    }
}
