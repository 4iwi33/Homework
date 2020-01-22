<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home4</title>
</head>

<body>
    <?php
    //На языке PHP написать счетчик посещений страницы.
    //После каждого обновления страницы значение счетчика
    //должно увеличиваться на единицу и выводиться на экран.
    $f = fopen("click.txt", "a+");
    flock($f, LOCK_EX);
    $count = fread($f, 100);
    @$count++;
    ftruncate($f, 0);
    fwrite($f, $count);
    fflush($f);
    flock($f, LOCK_UN);
    fclose($f);
    echo "Количество кликов: $count";
    ?>
</body>

</html>