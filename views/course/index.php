<h1>Мои курсы</h1>



<table class="table table-hover">
<?php
use yii\helpers\Url;

foreach ($courses as $course)
{
    $url = Url::to(['/course/viewcourse/', 'id' => $course->id]);
    ?>
  <tr>
      <td>
          <?=$course->name ?>
      </td>
      <td>
          <a class="btn btn-info" href="<?=$url?>" title="перейти к курсу">
              <i class="glyphicon glyphicon-arrow-right"></i> Перейти
          </a>
      </td>
  </tr>
<?}?>
</table>


