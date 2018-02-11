
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


    $("#lesson1").click(function(){
        request_data();
    });

    function Test_ajax() {
      $.ajax({
            url: '/upload/ans/',
            type: "GET",
            data: {},
            success: function (data) {
                alert(data.test); }
                });
    }
    
    function request_data() {
       $.ajax({
            url: '/upload/ans2/',
            type: "GET",
            data: {},
            success: function (data) {
                alert(data.response); }
                });
    }
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);

?>



<h3>js</h3>

<button type="button" id="test_id"  value="text">tt</button>
<button type="button" id="lesson1" value="text">Уроки</button>