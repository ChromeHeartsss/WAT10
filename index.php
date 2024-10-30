<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 10</title>
</head>
<body>
    <h1>Time in Riga</h1>
    <p>
        <?php
        date_default_timezone_set('Europe/Riga');
        echo date('Y-m-d H:i:s');
        ?>
    </p>
</body>
</html>
