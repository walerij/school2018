
<?php
/* @var $this yii\web\View */

$this->title = 'Home';
?>

<div class="site-index">
    <style>
       /* body {
            font-family: arial, sans-serif;
            font-size: 100%;
            margin: 3em;
            background: #666;
            color: #FFF;
        }*/
       .sticker-h2 {margin: 2px; }
        .sticker-h2, .sticker-p {
            font-size: 100%;
            font-weight: normal;
        }

        .sticker-ul, .sticker-li {
            list-style: none;
            text-align: center
        }

        .sticker-ul {
            overflow: hidden;
            padding: 3em;
        }

        .sticker-ul .sticker-li .sticker-a {
            text-decoration: none;
            color: #000;
            background: #FFC;
            display: block;
            height: 10em;
            width: 10em;
            padding: 1em;

            text-decoration: none;
            color: #000;
            background: #FFC;
            display: block;
            height: 10em;
            width: 10em;
            padding: 1em;
            -moz-box-shadow: 5px 5px 7px rgba(33, 33, 33, 1); /* для Firefox Грозного */
            -webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 7); /* да для люда обычного, праведного */
            -box-shadow: 5px 5px 7px rgba(33, 33, 33, 7); /* и про Оперушку не забудем*/
            -webkit-transform: rotate(-6deg);
            -o-transform: rotate(-6deg);
            -moz-transform: rotate(-6deg);

            box-shadow: 5px 5px 7px rgba(33,33,33,.7);
            -moz-transition: -moz-transform .15s linear;
            -o-transition: -o-transform .15s linear;
            -webkit-transition:-webkit-transform .15s linear;
        }

        .sticker-ul .sticker-li {
            margin: 1em;
            float: left;
        }
       .sticker-ul .sticker-li .sticker-h2 {
           font-size: 130%;
           font-weight: bold;
           padding-bottom: 2px;
       }

       .sticker-ul .sticker-li .sticker-p {
           font-family: "Reenie Beanie", arial, sans-serif;
           font-size: 150%;
       }

       .sticker-ul .sticker-li:nth-child(even) .sticker-a{
           -o-transform: rotate(4deg);
           -webkit-transform: rotate(4deg);
           -moz-transform: rotate(4deg);
           position: relative;
           top: 5px;
           background: #cfc;
       }
       .sticker-ul .sticker-li:nth-child(3n) .sticker-a{
             -o-transform: rotate(-3deg);
             -webkit-transform: rotate(-3deg);
             -moz-transform: rotate(-3deg);
             position: relative;
             top: -5px;
             background: #ccf;
         }
       .sticker-ul .sticker-li:nth-child(5n) .sticker-a{
           -o-transform: rotate(-3deg);
           -webkit-transform: rotate(-3deg);
           -moz-transform: rotate(-3deg);
           position: relative;
           top: -5px;
           background: #e57373;
       }
       .sticker-ul .sticker-li .sticker-a:hover,.sticker-ul .sticker-li .sticker-a:focus{
           -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
           -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
           box-shadow:10px 10px 7px rgba(0,0,0,.7);
           -webkit-transform: scale(1.25);
           -moz-transform: scale(1.25);
           -o-transform: scale(1.25);
           position:relative;
           z-index:5;
       }
       .sticker-img {
           width: 70%;
       }

    </style>
    <div class="panel panel-success">
        <div class="panel-heading">
          Самые популярные курсы
        </div>
        <div class="panel-body">
        <ul class="sticker-ul">
            <li class="sticker-li">
                <a href = "#" class="sticker-a">
                    <h2 class="sticker-h2">Сапер на Java</h2>
                    <p class="sticker-p">
                        <img src="/../course_image/mine2.png" alt="saper"
                             class ='sticker-img'      >
                    </p>
                </a>
            </li>
            <li class="sticker-li">
                <a href = "#"  class="sticker-a">
                    <h2 class="sticker-h2">Сокобан</h2>
                    <p class="sticker-p">
                        <img src="/../course_image/sokoban.png" alt="saper"
                                              class ='sticker-img'      >
                    </p>
                </a>
            </li>
            <li class="sticker-li">
                <a href = "#" class="sticker-a">
                    <h2 class="sticker-h2">ООО Фрукты</h2>
                    <p class="sticker-p"><img src="/../course_image/fruits2.png" alt="saper"
                                              class ='sticker-img'      ></p>
                </a>
            </li>
            <li class="sticker-li">
                <a href = "#"  class="sticker-a">
                    <h2 class="sticker-h2">МорФлот</h2>
                    <p class="sticker-p">
                        <img src="/../course_image/ship3.png" alt="ship"
                                              class ='sticker-img'      >
                    </p>
                </a>
            </li>
            <li class="sticker-li">
                <a href = "#" class="sticker-a">
                    <h2 class="sticker-h2">Микро-<br>шахматы</h2>
                    <p class="sticker-p">
                        <img src="/../course_image/shah.png" alt="ship"
                             class ='sticker-img'      >
                    </p>
                </a>
            </li>
            <li class="sticker-li">
                <a href = "#"  class="sticker-a">
                    <h2 class="sticker-h2">Жизнь</h2>
                    <p class="sticker-p">
                        <img src="/../course_image/life.png" alt="ship"
                             class ='sticker-img'      >
                    </p>
                </a>
            </li>
        </ul>
        </div>
    </div>
</div>

