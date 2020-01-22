<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home2</title>
</head>
<body>
    <?php
    //Написать функцию принимающую на вход массив чисел произвольной длинны. 
    //В результате работы функция должна возвращать наибольшее значение из массива.


    function maxx($arr)
    {
        reset($arr);
        $max = current($arr);
        foreach ($arr as $v){
            if ($v > $max)
            $max = $v;
        }
        return $max;
    }
    echo maxx([357, 1003, 2000, 5, 4, 12, 10]);
    echo "<br>";
    echo maxx([-3570, -10030, -2000, -5000, -4000, -12000, -10000]);
    echo "<br>";
    echo maxx([0 => 1, 1 => 54, 2 => 2000, 3 => 5, 4 => 62, 5=> 137]);
    ?>
</body>
</html>