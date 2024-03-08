<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Loop Foreach</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .item-list {
            list-style: none;
            padding: 0;
        }

        .item {
            margin-bottom: 5px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Lista de Cores:</h2>
    <ul class="item-list">
        <?php
        $colors = array("Red", "Green", "Blue", "Yellow", "Orange");

        foreach ($colors as $color) {
            echo "<li class='item'>$color</li>";
        }
        ?>
    </ul>
</body>
</html>
