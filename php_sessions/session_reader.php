<?php
    session_start();
    header('location: session_setter.php');
    $_SESSION['errors'] = [];
    if(!preg_match('/^[a-zA-Z]*$/',$_GET['name'])){
        $_SESSION['errors']['name'] = "Invalid Name Entry: Letters Only";
    }
    if(!preg_match('/^[1-9]{1,2}?$/',$_GET['age'])){
        $_SESSION['errors']['age'] = "Invalid Age Entry: 1-99";
    }
    if(!preg_match('/^[a-zA-Z]*$/',$_GET['occupation'])){
        $_SESSION['errors']['occupation'] = "Invalid Occupation Entry: Letters Only";
    }
 ?>