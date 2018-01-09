<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stepscontent".
 *
 * @property integer $id
 * @property integer $step_id
 * @property string $content
 * @property string $metka
 */
class StepscontentRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stepscontent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['step_id'], 'integer'],
            [['content', 'metka'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'step_id' => 'Step ID',
            'content' => 'Content',
            'metka' => 'Metka',
        ];
    }


}
