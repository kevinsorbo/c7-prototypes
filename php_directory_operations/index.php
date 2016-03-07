<!--Feature Set 1-->
<!-- Loop through the $file array that contains all image files in images folder ending with .jpg and
display them to the dom-->
<?php
    $file = glob("images/*.jpg");

    foreach($file as $img) {
        ?>
        <div id="image_container">
            <img src=<?=$img?>>
        </div>
        <?php
    }
        ?>

