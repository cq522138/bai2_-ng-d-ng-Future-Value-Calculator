<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Investment Amount: <input type="text" name="InventmentAmount"></br>
    Yearly Interest Rate: <input type="text" name="YearlyInterestRate"></br>
    Number of Years: <input type="text" name="NumberofYears"><br>
    <input type="submit" value="calculate">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $InventmentAmount=$_POST["InventmentAmount"];
    $YearlyInterestRate=$_POST["YearlyInterestRate"];
    $NumberofYears=$_POST["NumberofYears"];
    $Investment = $InventmentAmount+($InventmentAmount*$YearlyInterestRate*0.1);
    echo $Investment;
}