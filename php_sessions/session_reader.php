<!-- Session Reader -->
<?php
    session_start();
    foreach($_GET as $inputLabel => $inputValue){
        print("Label: $inputLabel; Value: $inputValue <br>");
 }
 ?>