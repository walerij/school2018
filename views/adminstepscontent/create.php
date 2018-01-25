<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StepscontentRecord */

$this->title = 'Create Stepscontent Record';
$this->params['breadcrumbs'][] = ['label' => 'Stepscontent Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stepscontent-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
