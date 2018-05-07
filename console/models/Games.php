<?php

namespace console\models;

use Yii;

/**
 * This is the model class for table "games".
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property string $description
 * @property string $author
 * @property string $require
 * @property int $views_count
 * @property int $create_at
 * @property int $update_at
 * @property int $status
 * @property string $admin
 */
class Games extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'games';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'logo', 'description', 'require', 'admin'], 'required'],
            [['views_count', 'create_at', 'update_at', 'status'], 'integer'],
            [['name', 'logo', 'description', 'author', 'require', 'admin'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'logo' => 'Logo',
            'description' => 'Description',
            'author' => 'Author',
            'require' => 'Require',
            'views_count' => 'Views Count',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'status' => 'Status',
            'admin' => 'Admin',
        ];
    }
}
