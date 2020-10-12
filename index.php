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
    <input type="text" name="numberA" placeholder="Nhap so a">
    <br>
    <br>
    <input type="text" name="numberB" placeholder="Nhap so b">
    <br>
    <br>
    <input type="text" name="numberC" placeholder="Nhap so c">
    <br>
    <br>
    <input type="submit" value="Calculate">
</form>
</body>
</html>
<?php
include('QuadraticEquation.php');
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $numA = $_REQUEST['numberA'];
    $numB = $_REQUEST['numberB'];
    $numC = $_REQUEST['numberC'];

    $phuongtrinh = new QuadraticEquation($numA, $numB, $numC);
    if ($phuongtrinh->getDiscriminant() > 0) {
        echo "Phuong trinh co 2 nghiem la :" . $phuongtrinh->getRoot1() . "va" . $phuongtrinh->getRoot2();
    } else if ($phuongtrinh->getDiscriminant() === 0) {
        echo "Phuong trinh co 1 nghiem la :" . $phuongtrinh->getRoot1();
    } else {
        echo "Phuong trinh vo nghiem";
    }
}


