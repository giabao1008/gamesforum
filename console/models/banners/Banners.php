<?php

namespace console\models\banners;

use Yii;

/**
 * This is the model class for table "banners".
 *
 * @property int $id
 * @property string $url
 * @property string $image
 * @property int $status 0 - ẩn , 1 - Active , 2 - Đã xóa 
 * @property int $create_at
 * @property string $create_by
 * @property int $update_at
 * @property string $update_by
 */
class Banners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public  $file;
    public static function tableName()
    {
        return 'banners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'create_at', 'create_by', 'update_at', 'update_by'], 'required'],
            [['status', 'create_at', 'update_at'], 'integer'],
            [['url', 'image', 'create_by', 'update_by'], 'string', 'max' => 255],
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
            'url' => 'Url',
            'image' => 'Image',
            'status' => 'Status',
            'create_at' => 'Create At',
            'create_by' => 'Create By',
            'update_at' => 'Update At',
            'update_by' => 'Update By',
        ];
    }
}
