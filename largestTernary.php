<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="width:15rem">

        <legend>Largest among 3 Number</legend>

        <form method='POST' action="largestTernary.php">
        <label>Number 1</label>
        <input type="number" name="one"><br><br>
        <label>Number 2</label>
        <input type="number" name="two"><br><br>
        <label>Number 3</label>
        <input type="number" name="three"><br><br>
        <input type="submit" name="submit"><br>
        </form>

    </fieldset>

    <?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $one = $_POST['one'];
        $two = $_POST['two'];
        $three = $_POST['three'];

        $number = ($one > $two)? $one : $two;
        $number = ($number > $three)? $number : $three;
        echo("<br>Largest Number = $number");
    }
    ?>
</body>
</html>