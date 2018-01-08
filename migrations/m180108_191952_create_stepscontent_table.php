<?php

use yii\db\Migration;

/**
 * Handles the creation of table `stepscontent`.
 * контент каждого шага
 */
class m180108_191952_create_stepscontent_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('stepscontent', [
            'id' => $this->primaryKey(),
            'step_id'=>$this->integer(),
            'content' =>$this->string(),
            'metka' =>$this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('stepscontent');
    }
}
