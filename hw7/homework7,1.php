<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homework7</title>
    <style>
        .list {
            background-color: #E6E4E4;
            width: 250px;
            height: 360px;
            padding: 15px;
            margin: auto;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .listdown {
            background-color: #fff;
            font-size: 15px;
            padding: 15px;
        }

        .list p {
            text-align: justify;
            font-size: 22px;
        }

        div {
            border-radius: 1em;
            box-shadow: 0 0 5px;
            padding: 5px;
        }

        input {
            border-radius: 1em;
            background-color: #2C96E3;
        }

        #noname {
            width: 100px;
            height: 30px;
            color: white;
            margin: 10px 5px;
        }
    </style>
</head>

<body>

    <form action="homework7.php" method="get" target="_blank">
        <div class="list">
            <!-- <input type="Hidden" name=id value=1> -->
            <p>What subjects would you <br>
                like to learn more about ?</p>
            <div class="listdown">
                <input type="Radio" name=vote value=1 checked>HTML & CSS
                <hr>
                <input type="Radio" name=vote value=2>Javascript
                <hr>
                <input type="Radio" name=vote value=3>Js Framework (Jquery, etc)
                <hr>
                <input type="Radio" name=vote value=4>Ruby / Ruby on Rails
                <hr>
                <input type="Radio" name=vote value=5>PHP
                <hr>
                <input type="Radio" name=vote value=6>mySQL
            </div>
            <input type="Submit" value="VOTE" id="noname">
        </div>
    </form>
</body>

</html>