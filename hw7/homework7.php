<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homework7</title>
    <style>
         .conteiner {
            background-color: #E6E4E4;
            width: 250px;
            height: 170px;
            padding: 15px;
            margin: auto;
        }
/* 
        .listdown {
            background-color: #fff;
            height: 200px
            /* font-size: 15px; */
        /* padding: 15px; */
        } */

        .list p {
            text-align: justify;
            font-size: 22px;
        }

        div {
            border-radius: 1em;
            box-shadow: 0 0 5px;
            padding: 5px;
        }

        /* input {
            border-radius: 1em;
            background-color: #2C96E3;
        } */
    </style> */
</head>

<body>
    <!-- <form action="" method="get" target="_blank">
        <div class="list">
            <p>What is your qeustion ?</p>
            <div class="listdown">
                <input type="hidden" name=vote value=1>69% Don't have one<br>
                <input type="hidden" name=vote value=2>22% Why?<br>
                <input type="hidden" name=vote value=3>0% When?<br>
                <input type="hidden" name=vote value=4>9% Where?<br>

            </div>
        </div>
    </form> -->

    <?php
    $ind = $_POST['vot'];
    $arr = file("homework7.txt");
    $buf = explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf) . "\n";
    file_put_contents("homework7.txt", $arr);
    ?>

    <? //search summ
    $sum = 0;
    for ($i = 1; $i < count($arr); $i++) {
        $sum = $sum + explode(" - ", $arr[$i])[1];
    }
    ?>

    <div class="conteiner">
        <div class="main">
            <h1><?= $arr[0] ?></h1>
            <div class="answers">

                <?
                for ($i = 1; $i < count($arr); $i++) {
                    $buf = explode(" - ", $arr[$i]);
                    $result = round(($buf[1] / $sum * 100), 2);
                    echo "<div class='line' style='width: {$result}px'></div><br> $buf[0] -$result %<br>";
                }
                ?>
            </div>

        </div>

    </div>























</body>

</html>