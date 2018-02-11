
<?php
$var = 123;
//начало многосточной строки, можно использовать любые кавычки
$script = <<< JS
    function foo() {
        return $var; //можно использовать переменные
    }
     $("#test_id").click(function(){
        Test_ajax();
    });

    function Test_ajax() {
      $.ajax({
            url: '/upload/ans',
            type: "GET",
            data: {},
            success: function (data) {
                alert(data.test); }
                });
    }
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);

?>



<h3>js</h3>

<button type="button" id="test_id" onclick="alert(foo())" value="text">tt</button>