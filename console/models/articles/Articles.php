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
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['create_at', 'update_at'], 'integer'],
            [['title', 'image', 'slug', 'create_by', 'update_by'], 'string', 'max' => 255],
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
        ];
    }
}
