<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homework6</title>
</head>

<body>
    <?php
    // файл с конкретным голосованием
    $data = File("$id.dat");

    // выводим благодарности,
    // если это не просто просмотр результатов
    if ($vote) echo "<b><font color=red> Спасибо за Ваше мнение! </font></b><p>";

    // выводим заголовок голосования - 1я строка файла
    echo "<b>$data[0]</b><p>";

    // печатаем список ответов и результатов - остальные строки
    for ($i = 1; $i < count($data); $i++) {
        $votes = split("~", $data[$i]); // значение~ответ
        echo "$votes[1]: <b>$votes[0]</b><br>";
    }

    // если это не просмотр результатов, а голосование,
    // производим необходимые действия для учета голоса
    if ($vote) {
        $f = fopen("$id.dat", "w");
        fputs($f, "$data[0]");
        for ($i = 1; $i < count($data); $i++) {
            $votes = split("~", $data[$i]);
            if ($i == $vote) $votes[0]++;
            fputs($f, "$votes[0]~$votes[1]");
        }
        fclose($f);
    }
    ?>
</body>

</html>