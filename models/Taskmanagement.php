<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taskmanagement".
 *
 * @property int $id
 * @property int $taskId
 * @property int $userId
 * @property string $createdOn
 * @property string $lastUpdatedOn
 */
class Taskmanagement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'taskmanagement';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['taskId', 'userId', 'createdOn', 'lastUpdatedOn'], 'required'],
            [['taskId', 'userId'], 'integer'],
            [['createdOn', 'lastUpdatedOn'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'taskId' => 'Task ID',
            'userId' => 'User ID',
            'createdOn' => 'Created On',
            'lastUpdatedOn' => 'Last Updated On',
        ];
    }

     public function getuserRecord()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }


}
