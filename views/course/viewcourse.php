<?
use yii\helpers\Url;

?>

<div class="panel panel-success">
    <div class="panel-heading">
        Курс <strong><?=$model->name;?></strong>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <?php
            $lesson_count_record=1;

            foreach ($model->lesson as $lesson)
                    {
                        $url = Url::to(['/course/viewlesson/', 'id' => $lesson->id]);
                        ?>
                        <tr>
                           <td><?=$lesson_count_record?></td>
                           <td><?=$lesson->title?></td>
                           <td><?=$lesson->info?></td>
                            <td>
                                <a class="btn btn-info" href="<?=$url?>"
                                   title="Изучить урок">
                                    <i class="glyphicon glyphicon-hand-right"></i> Изучить
                                </a>
                            </td>
                        </tr>

                    <?
                        $lesson_count_record++;
                    }?>


        </table>
    </div>

</div>

