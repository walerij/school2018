<?php


?>

<div class="panel panel-warning">
        <div class="panel-heading">
           <h2> <?=$model->title?> </h2>
        </div>
        <div class="panel-body">
            <div>
               <pre><?=$model->info; ?></pre>
            </div>

            <?php
            function setStepView($widgetname, $step){


            }
            ?>
            ?>
                <?foreach ($model->steps as $step)
                { ?>


                         <?  // if ($step->steptype=='video')
                             switch ($step->steptype)
                                     {
                                   case 'video':
                                       $this->beginContent('@app/views/course/part/video.php',
                                           ['step'=>$step]); ?>

                                       ...child layout content here...

                                       <?php $this->endContent();

                                        break;
                                    case 'work':

                                        $this->beginContent('@app/views/course/part/work.php',
                                            ['step'=>$step]); ?>

                                        ...child layout content here...

                                        <?php $this->endContent();
                                         break;
                                 case 'work':

                                     $this->beginContent('@app/views/course/part/work.php',
                                         ['step'=>$step]); ?>

                                     ...child layout content here...

                                     <?php $this->endContent();
                                     break;
                                        }

                                ?>


                        <?
                          }

                        ?>





        </div>
</div>





