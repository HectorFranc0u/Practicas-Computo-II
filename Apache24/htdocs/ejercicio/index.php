<?php
    if(isset($_POST['send'])){
        $selection = $_POST['selection'];
        include $selection . ".php";

        echo $selection . ".php";
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <select name="selection">
            <option value="en">English</option>
            <option value="es">Spanish</option>
        </select>
        <input type="submit" name="send" value="Cambiar"/>
    </form>
    <h1><?php echo TITLE; ?></h1>
    <h1><?php echo SETTING; ?></h1>
</body>
</html>

