<!-- Session Reader -->
<?php
    session_start();
//    foreach($_GET as $inputLabel => $inputValue){
//        print("Label: $inputLabel; Value: $inputValue <br>");
    header('location: session_setter.php');

    if(!preg_match('^[1-9]$',$_GET['name'])){

    }
// }
 ?>