<?php

use yii\db\Migration;

/**
 * Handles the creation of table `steps`.
 * Шаг урока
 */
class m180108_191941_create_steps_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('steps', [
            'id' => $this->primaryKey(),
            'lesson_id'=>$this->integer(), //id урока
            'title'=>$this->string(), //заголовок
            'info'=>$this->string(), //информация, задание
            'steptype'=>$this->string() // тип шага

        ]);
    }

    /**
     * Типы шагов:
     * (от учителя - мы по ним учимся)
     * theory - теория
     * video - видеоконтент
     * photo - фотоконтент
     *
     * (от учеников - выполнение работ)
     * work - самостоятельная работа (задание с галочками
     * screen - размещение скриншота
     * videoreport - отчет видео
     * comment - размещение своего комментария
     * problem - размещение информации о проблемах выполнения
     * ocenka  - размещение оценки за задание
     *
     */

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('steps');
    }
}
