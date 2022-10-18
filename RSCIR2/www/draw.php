<html lang="ru">
<head>
    <title>Создание фигур</title>
    <style>
        body {
        background-color: black;
        }
    </style>
</head>

<body>
    <?php
    $n = htmlspecialchars($_GET['code']);
    include __DIR__ . '/functions/decoder.php';
    include __DIR__ . '/functions/drawer.php';
    $a = decode($n);
    echo draw($a["shape"], $a["color"], $a["width"], $a["height"]);
    ?>
</body>

</html>
