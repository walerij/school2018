<?php

use yii\widgets\ActiveForm;
?>
 <h2>ДОбавление фото и пути к нему</h2>

<?php
$form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
]);
?>
<?= $form->field($model, 'path')->textInput(); ?>
<?= $form->field($model, 'file')->fileInput(); ?>

    <button>Сохранить</button>

<?php ActiveForm::end(); ?>