<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StepscontentRecord */

$this->title = 'Update Stepscontent Record: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stepscontent Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stepscontent-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
