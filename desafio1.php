<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;


        }

        .container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="number"] {
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            margin-top: 10px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="altura" id="labelheight">Altura:</label>
    <input type="number" id="altura" name="altura">
    <label for="peso" id="labelweight">Peso:</label>
    <input type="number" id="peso" name="peso">
    <button type="submit">CALCULAR</button>
    </form>
    <br>
    

    <?php
        if ($_SERVER['REQUEST_METHOD']  == 'POST'): ?>
        <?php
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];

        try {
            if (!is_numeric($altura) || !is_numeric($peso)) {
                throw new TypeError('Both altura and peso must be numeric values');
            }
    
            $altura = floatval($altura) / 100;
            $imc = $peso / ($altura * $altura);
            echo round($imc, 0);  
        } catch (TypeError $e) {
            // Log or display the error message
            echo $e->getMessage();
            return null;
        }
        ?>
    <?php endif; ?>
    
    </div>
</body>
</html>