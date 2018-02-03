<style>



</style>
<?php
function getRound($content="", $glyph="ok", $btn_type="default")
{
    ?>

        <a href="#" class="btn btn-<?=$btn_type?>">
           <i class="glyphicon glyphicon-<?=$glyph;?>">

           </i>
            <?=$content?>
        </a>

    <?
}
?>
<div class="panel panel-warning">
    <div class="panel-heading">
        <h2> <?=$model->title?> </h2>
    </div>
    <div class="panel-body">
        <div>
            <pre><?=$model->info; ?></pre>
        </div>
        <div class="thumbnail" style="height: 29em" >
            content
        </div>
        <div class="btn-group btn-group-justified">
            <?foreach ($model->steps as $step)
            { ?>
                <?  // if ($step->steptype=='video')
                switch ($step->steptype) {
                    case 'video':
                        getRound('Смотрим видео','ok','success');
                        break;
                    case 'work':
                        getRound('Выполняем задание','pencil', 'warning');
                        break;
                }?>
            <?}?>
        </div>
    </div>
</div>
