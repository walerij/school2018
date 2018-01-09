<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $id
 * @property integer $topic_id
 * @property integer $teacher_id
 * @property string $name
 * @property string $info
 */
class CourseRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id', 'teacher_id'], 'integer'],
            [['name', 'info'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic_id' => 'Topic ID',
            'teacher_id' => 'Teacher ID',
            'name' => 'Name',
            'info' => 'Info',
        ];
    }

    public function getLesson()
    {
        return $this->hasMany(LessonRecord::className(),['course_id'=>'id']);
    }

}
