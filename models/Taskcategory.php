<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taskcategory".
 *
 * @property int $id
 * @property int $categoryName
 * @property string $createdOn
 * @property string $lastUpdatedOn
 */
class Taskcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'taskcategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoryName', 'createdOn', 'lastUpdatedOn'], 'required'],
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
            'categoryName' => 'Category Name',
            'createdOn' => 'Created On',
            'lastUpdatedOn' => 'Last Updated On',
        ];
    }


}
