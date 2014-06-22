<?php
   if (empty($inner['title']) && empty($inner['body'])) {
?>
<!-- <div id="header" class="innerpage"></div> -->
<?php
    } else {
?>   <div id="header" class="innerpage">
            <div class="shadow"></div>
            <div class="container940">
                <h1 class="pagetitle"><?php echo $inner['title'];?></h1>
                <div class="pagedesc"><?php echo $inner['body'];?></div>
                <div class="clear"></div>
            </div>
        </div>
<?php
    }
?>