<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LessonRecord */

$this->title = 'Update Lesson Record: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Lesson Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lesson-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
