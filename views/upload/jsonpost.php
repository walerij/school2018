<?
use yii\widgets\ActiveForm;
?>
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


 //просто получение данных поля
   $("#form_button").click(function(){
        $("#test_pre").append($("#form_name").val());
       //  request_data();
        ;
    });
   
   //а теперь горячо любимый ajax через POST
   //получение данных об уроках 
    function request_data() {
       $.ajax({
            url: '/upload/post2/',
            type: "GET",
            dataType: 'json',
            data: {},
            success: function (data) {
               alert(data.response); 
                 // $("#test_pre").append(data.response);  
               
                  }
                });
    }
   

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
<?php /* $form = ActiveForm::begin([
    'beforeSubmit' => new \yii\web\JsExpression('function(form) {
                jQuery.ajax({
                    url: "/upload/post2/",
                    type: "POST",
                    dataType: "json",
                    data: form.serialize(),
                    success: function(response) {
                        ...
                    },
                    error: function(response) {
                        ...
                    }
                });
                return false;
            }')
]);

 * 
 * <?php ActiveForm::end() ?>
 * <? $form->field($model,'name' )->textInput()?>
 *  */
?>

