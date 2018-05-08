<?php

namespace console\models\contacts;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property int $send_at
 * @property int $is_read Đã đọc hay chưa  0 - chưa , 1 - rồi
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            [['body'], 'string'],
            [['send_at', 'is_read'], 'integer'],
            [['name', 'email', 'subject'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên',
            'email' => 'Email',
            'subject' => 'Tiêu đề',
            'body' => 'Nội dung',
            'send_at' => 'Gửi lúc',
            'is_read' => 'Trạng thái',
        ];
    }
}
