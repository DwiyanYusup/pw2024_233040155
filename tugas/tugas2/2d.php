<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catur</title>
    <style>
        .black-box,
        .white-box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            display: inline-block;
            margin: 0px;
        }

        .black-box {
            background-color: black;
        }

        .white-box {
            background-color: white;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            $ij = $i + $j;
            if ($ij % 2 == 0) {
                echo "<div class='black-box'></div>";
            } else {
                echo "<div class='white-box'></div>";
            }
        }
        echo "<br>";
    }
    ?>
</body>

</html>