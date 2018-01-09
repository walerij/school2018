<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "steps".
 *
 * @property integer $id
 * @property integer $lesson_id
 * @property string $title
 * @property string $info
 * @property string $steptype
 */
class StepsRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'steps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lesson_id'], 'integer'],
            [['title', 'info', 'steptype'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lesson_id' => 'Lesson ID',
            'title' => 'Title',
            'info' => 'Info',
            'steptype' => 'Steptype',
        ];
    }

    public function getStepscontent()
    {
        return $this->hasMany(StepscontentRecord::className(),['step_id'=>'id']);
    }


}
