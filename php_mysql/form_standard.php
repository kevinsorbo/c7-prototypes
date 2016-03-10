<?php
/**
 * Created by PhpStorm.
 * User: koreylo
 * Date: 3/10/16
 * Time: 12:29 PM
 */
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>All in Good Form</title>
        </head>
        <body>
            <form action="index_insert.php" method="post">
                <input type="text" name="title" placeholder="Title"><br>
                <textarea type="text"  name="details" placeholder="Details"></textarea><br>
                <input type="text"  name="timestamp" placeholder="TimeStamp"><br>
                <input type="text"  name="user_id" placeholder="UserId"><br>
                <input type="submit" value="Submit">
            </form>
        </body>
    </html>

<!--<form action="session_reader.php" method="get">-->
<!--    Name: <input type="text" name='name' value="--><?//=array_key_exists('name',$_SESSION)? $_SESSION['name']:''?><!--"><br>-->
<!--    Age: <input type="text" name="age" value="--><?//=array_key_exists('age',$_SESSION)?$_SESSION['age']:''?><!--"><br>-->
<!--    Occupation: <input type="text" name='occupation' value="--><?//=array_key_exists('occupation',$_SESSION)?$_SESSION['occupation']:''?><!--">-->
<!--    <input type="submit" value="submit">-->
<!--</form>-->