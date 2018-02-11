
<?php
$var = 123;
//начало многосточной строки, можно использовать любые кавычки
$script = <<< JS
    function foo() {
        return $var; //можно использовать переменные
    }
    // кнопка tt
     $("#test_id").click(function(){
        Test_ajax();
    });

 // кнопка Уроки
    $("#lesson1").click(function(){
        request_data();
    });
// кнопка JSON
    $("#JSONb").click(function(){
        request_json();
    });
    //тест на ajax
    function Test_ajax() {
      $.ajax({
            url: '/upload/ans/',
            type: "GET",
            data: {},
            success: function (data) {
                alert(data.test); }
                });
    }
    
    //получение данных об уроках 
    function request_data() {
       $.ajax({
            url: '/upload/ans2/',
            type: "GET",
            dataType: 'json',
            data: {},
            success: function (data) {
                alert(data.response); }
                });
    }
    
     //получение данных об уроках 
    function request_json() {
       $.ajax({
            url: '/upload/json1/',
            type: "GET",
            dataType: 'json',
            data: {},
            success: function (data) {
            
                $.each(data.response, function(i, field) {
                  $("h3").append("<br>"+field);
                    
                });
                           
            
                  }
                });
    }
    
    
    function regJSON() {
      $.getJSON( "/upload/json1/", function( data ) {
          var items = [];
          $.each( data.response, function( key, val ) {
            items.push( "<li id='" + key + "'>" + val + "</li>" );
          });
         
          $( "<ul/>", {
            "class": "my-new-list",
            html: items.join( "" )
          }).appendTo( "h3" );
});
    }
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);

?>



<h3>js</h3>

<button type="button" id="test_id"  value="text">tt</button>
<button type="button" id="lesson1" value="text">Уроки</button>
<button type="button" id="JSONb" title="Получение и обработка JSON">JSON</button>