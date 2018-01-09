<?php foreach ($step->stepscontent as $cont) { ?>
<iframe width="100%" height="400"
        src="https://www.youtube.com/embed/<?= $cont->content ?>"
        frameborder="0" allow="autoplay; encrypted-media"
        allowfullscreen>

</iframe>
<?}?>