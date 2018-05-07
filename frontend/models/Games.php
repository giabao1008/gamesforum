<?php

namespace frontend\models;

class Games extends \console\models\Games{
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

?>