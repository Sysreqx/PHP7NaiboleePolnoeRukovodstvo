<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Листинг 22.1. Пример класса. Файл Math/Complex.php</title>
    <style type="text/css">
        body {
          background-color: grey;
        }
    </style>
</head>
<body>
<?php 
require_once "Math/Complex2.php";
$a = new MathComplex2(314, 101);
$a->add(new MathComplex2(303, 6));
echo $a;


?>
</body>
</html>