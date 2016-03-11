<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Sessions</title>
    <meta charset="utf-8">
</head>
<body>
    <!-- empty function used to check if errors[key] is empty and for regex checking done in session_reader
    <form action="session_reader.php" method="get">
        Name: <input type="text" name='name' value="<?=array_key_exists('name',$_SESSION)? $_SESSION['name']:''?>">
        <?=empty($_SESSION['errors']['name'])?'':$_SESSION['errors']['name']?>
        <br>
        Age: <input type="text" name="age" value="<?=array_key_exists('age',$_SESSION)?$_SESSION['age']:''?>">
        <?=empty($_SESSION['errors']['age'])?'':$_SESSION['errors']['age']?>
        <br>
        Occupation: <input type="text" name='occupation' value="<?=array_key_exists('occupation',$_SESSION)?$_SESSION['occupation']:''?>">
        <?=empty($_SESSION['errors']['occupation'])?'':$_SESSION['errors']['occupation']?>
        <input type="submit" value="submit">
    </form>
</body>
</html>
