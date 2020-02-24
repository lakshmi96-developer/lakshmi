<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property string $taskName
 * @property string $taskDescription
 * @property string $taskComments
 * @property string $taskCategory
 * @property string $taskStartTime
 * @property string $taskEndTime
 * @property string $taskStatus
 * @property string $createdOn
 * @property string $lastUpdatedOn
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['taskName', 'taskDescription', 'taskComments', 'taskCategory', 'taskStartTime', 'taskEndTime', 'taskStatus', 'createdOn', 'lastUpdatedOn'], 'required'],
            [['taskDescription', 'taskComments'], 'string'],
            [['taskStartTime', 'taskEndTime', 'createdOn', 'lastUpdatedOn'], 'safe'],
            [['taskName', 'taskCategory', 'taskStatus'], 'string', 'max' => 100],
        ];
    }
    

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'taskName' => 'Task Name',
            'taskDescription' => 'Task Description',
            'taskComments' => 'Task Comments',
            'taskCategory' => 'Task Category',
            'taskStartTime' => 'Task Start Time',
            'taskEndTime' => 'Task End Time',
            'taskStatus' => 'Task Status',
            'createdOn' => 'Created On',
            'lastUpdatedOn' => 'Last Updated On',
        ];
    }


  
    public function getcategoryRecord()
    {
        return $this->hasOne(Taskcategory::className(), ['id' => 'taskCategory']);
    }

    //  public function getuserRecord()
    // {
    //     return $this->hasOne(User::className(), ['id' => 'firstName']);
    // }


     
}
