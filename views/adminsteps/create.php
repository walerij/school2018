<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StepsRecord */

$this->title = 'Create Steps Record';
$this->params['breadcrumbs'][] = ['label' => 'Steps Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="steps-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
