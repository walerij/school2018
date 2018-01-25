<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdminStepscontentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stepscontent Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stepscontent-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stepscontent Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'step_id',
            'content',
            'metka',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
