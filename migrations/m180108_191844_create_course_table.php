<?php

use yii\db\Migration;

/**
 * Handles the creation of table `course`.
 *  таблица курсов
 */
class m180108_191844_create_course_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('course', [
            'id' => $this->primaryKey(),
            'topic_id'=>$this->integer(),
            'teacher_id'=>$this->integer(),
            'name'=>$this->string(),
            'info'=>$this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('course');
    }
}
