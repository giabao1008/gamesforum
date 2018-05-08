<?php

namespace console\models\games;

use Yii;

/**
 * This is the model class for table "games".
 *
 * @property int $id
 * @property int $game_type
 * @property string $name
 * @property string $logo
 * @property string $description
 * @property string $author
 * @property string $require Cấu hình tối thiểu
 * @property int $views_count
 * @property int $is_Hot Là game hot hay không ? 1 -  có , 0 - không
 * @property int $create_at
 * @property int $update_at
 * @property int $status
 * @property string $create_by
 *
 * @property GameType $gameType
 */
class Games extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'games';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game_type', 'description', 'require', 'create_by'], 'required'],
            [['game_type', 'views_count', 'is_Hot', 'create_at', 'update_at', 'status'], 'integer'],
            [['name', 'logo', 'description', 'author', 'require', 'create_by'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['game_type'], 'exist', 'skipOnError' => true, 'targetClass' => GameType::className(), 'targetAttribute' => ['game_type' => 'id']],
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
            'game_type' => 'Game Type',
            'name' => 'Name',
            'logo' => 'Logo',
            'description' => 'Description',
            'author' => 'Author',
            'require' => 'Require',
            'views_count' => 'Views Count',
            'is_Hot' => 'Is  Hot',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'status' => 'Status',
            'create_by' => 'Create By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGameType()
    {
        return $this->hasOne(GameType::className(), ['id' => 'game_type']);
    }
}
