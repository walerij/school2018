<?php

use yii\db\Migration;

/**
 * Handles the creation of table `lesson`.
 *
 * таблица Уроки
 */
class m180108_191912_create_lesson_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('lesson', [
            'id' => $this->primaryKey(),
            'course_id'=>$this->integer(),
            'title'=>$this->string(),
            'info'=>$this->string()

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('lesson');
    }
}
