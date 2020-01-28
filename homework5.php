<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homework5</title>
</head>

<body>
    <?php
    /*Написать калькулятор, сохраняющий историю вычислений в текстовом файле.
    Пример содержимого файла:
    2*3=6
    5*5=25
    6*5=30*/
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $a * $b;
    echo "$a * $b = $c";
    file_get_contents('clickk.txt', "$a * $b = $c" . "\n", FILE_APPEND);





    ?>
</body>

</html>