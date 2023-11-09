<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<fieldset style="width:20rem">
    <legend>Swap Numbers</legend>
    <form method='POST' action="swapNumber.php">
        <label for="">First no </label>
        <input type="number" name='first_number'> <br><br>
        <label for="">Second no</label>
        <input type="number" name='second_number'><br><br>
        <input type="submit" name='submit'>
    </form>
</fieldset>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){

    $firstNo = $_POST['first_number'];
    $secondNo = $_POST['second_number'];

    $bucket = $firstNo;
    $firstNo = $secondNo;
    $secondNo = $bucket;

    echo ("First Number = $firstNo <br> Second Number = $secondNo");
}
    
?>
</body>
</html>