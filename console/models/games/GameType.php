<?php

namespace console\models\games;

use Yii;

/**
 * This is the model class for table "game_type".
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property string $type
 *
 * @property Games[] $games
 */
class GameType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'game_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type'], 'required'],
            [['name', 'logo', 'type'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'logo' => 'Logo',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGames()
    {
        return $this->hasMany(Games::className(), ['game_type' => 'id']);
    }
}
