<?php
$komponen = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama-nama Perangkat Keras Dari Komputer.</title>
</head>

<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($komponen as $k) : ?>
            <li><?= $k; ?></li>
        <?php endforeach; ?>
    </ol><br>

    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php array_push($komponen, "Card Reader", "Modem");
        sort($komponen); ?>
        <?php foreach ($komponen as $k) : ?>
            <li><?= $k; ?></li>
        <?php endforeach; ?>
    </ol>
</body>

</html>