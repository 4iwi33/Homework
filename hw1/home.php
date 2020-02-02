<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>

<body>
    <?php




    $r = array(array(5, 7), array(9, 9));
    foreach ($r as $key => $val)
        echo $key . ' — ' . array_sum($val) . '<br />';











    ?>
</body>

</html>