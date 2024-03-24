<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rangkaian Angka Terurut</title>
    <style>
        .box2,
        .box {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            background: blueviolet;
        }

        .box2 {
            background: khaki;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        Masukan Angka :
        <input type="number" name="angka">
        <button type="submit" name="Submit">Tampilkan</button>
    </form>
    <br>
    <?php
    if (isset($_POST["angka"])) {
        $angka = $_POST["angka"];
        for ($i = $angka; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % 2 == 0) {
                    echo "<div class='box'>" . $i . "</div>";
                } else {
                    echo "<div class='box2'>" . $i . "</div>";
                }
            }
            echo "<br>";
        }
    } else {
    }
    ?>
</body>

</html>