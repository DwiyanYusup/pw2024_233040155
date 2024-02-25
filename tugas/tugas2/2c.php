<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Angka</title>
    <style>
        .black-box {
            background-color: black;
            border: 1px solid white;
            padding: 5px;
            display: inline-block;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='black-box'>" . $j . "</div>";
        }
        echo "<br>";
    }
    ?>
</body>

</html>