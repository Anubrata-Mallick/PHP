<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="width:15rem">

    <legend>Simple Interest Calculator</legend>
    <form method="POST" action="simpleInterest.php">
        <label for="">Amount</label>
        <input type="number" name='amount'><br><br>
        <label for="">Year</label>
        <input type="number" name='year'><br><br>
        <label for="">Rate</label>
        <input type="number" name='rate'><br><br>
        <input type="submit" name="submit">

    </form>

    </fieldset>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $amount = $_POST['amount'];
        $rate = $_POST['rate']/100;
        $year = $_POST['year'];

        $total = $amount*(1+($rate*$year));
        echo("<br> <h2>Total Amount after $year year = $total<h2/>");
    }
    ?>
</body>
</html>