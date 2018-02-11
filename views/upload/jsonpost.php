
<h3> Тестирование данных POST через js </h3>

<pre id="test_pre">
     Стенд выполнения тестов
</pre>
<?php
$var = 123;
//начало многосточной строки, можно использовать любые кавычки
$script = <<< JS
    function foo() {
        return $var; //можно использовать переменные
    }
    // кнопка tt
     $("#test_id").click(function(){
        $("#test_pre").append("<br>Работоспособность кнопки "+$(this).attr('id'));
        ;
    });

   $("#form_button").click(function(){
        $("#test_pre").append($("#form_name").val());
        ;
    });

JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);

?>

<button type="button" class="btn btn-success" id="test_id">
    Test
</button>


<hr>

<form action="#" name="form1" method="post">
    <label>Наименование</label>
    <input type="text" id="form_name" placeholder="Название">
    <br>

    <button type="button" id="form_button">Получить название</button>
</form>
