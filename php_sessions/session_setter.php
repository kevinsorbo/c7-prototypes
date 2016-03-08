<!-- Session Setter -->
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
    <form action="session_reader.php" method="get">
        Name: <input type="text" name='name' value="<?=array_key_exists('name',$_SESSION)? $_SESSION['name']:''?>"><br>
        Age: <input type="text" name="age" value="<?=array_key_exists('age',$_SESSION)?$_SESSION['age']:''?>"><br>
        Occupation: <input type="text" name='occupation' value="<?=array_key_exists('occupation',$_SESSION)?$_SESSION['occupation']:''?>">
        <input type="submit" value="submit">
    </form>
</body>
</html>
