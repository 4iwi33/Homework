<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW8</title>
    <link rel="stylesheet" href="hw8.css">
</head>

<body>
    <div class="style" style="width: <?= $_GET['a'] ?>px; height: <?= $_GET['b'] ?>px; background-color: <?= $_GET['c'] ?>">
        <?php
        $S = $_GET['b'] * $_GET['a'];
        echo "<center> square  <br>" . $s . "px<sup>2";
        ?>
    </div>
</body>

</html>