<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$company = "Шаги к успеху";
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= $company.' - '.Html::encode($this->title) ?></title>

    <?php $this->head() ?>


</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php

    NavBar::begin([
           /* 'brandLogo'=>Html::img('/image/fmap.png',
                    ['alt'=>Yii::$app->name,'height'=>'25px',
                        'display'=>'inline','float'=>'left']),*/
        'brandLabel' =>     $company,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Курсы', 'url' => ['/site/index']],
            ['label' => 'Вебинары', 'url' => ['/site/vebinars']],
            ['label' => 'Мои курсы', 'url' => ['/course/index']],
             ['label' => 'Загрузка файла', 'url' => ['/upload/index']],
            ['label' => 'Консоль', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <div class="col-lg-10 col-md-10">
          <?= $content ?>
       </div>
        <div class="col-lg-2 col-md-2">
            <h2>Календарь вебинаров</h2>
            <?php $this->beginContent('@app/views/site/parts/calendar.php'); ?>

            ...child layout content here...

            <?php $this->endContent(); ?>
        </div>
    </div>
    <div class="container">

    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?=$company?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
