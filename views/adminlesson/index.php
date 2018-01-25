<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdminLessonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lesson Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lesson-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lesson Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'course_id',
            'title',
            'info',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
