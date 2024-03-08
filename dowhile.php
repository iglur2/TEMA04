
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h2>Tabuada</h2>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number">
        <button type="submit" name="generate">Generate Table</button>
    </form>
    
    <?php
    if(isset($_POST['generate'])) {
        $number = $_POST['number'];
        
        if($number > 0) {
            echo "<h3>Tabuada do $number:</h3>";
            
            $i = 1;
            while ($i <= 10) {
                $result = $number * $i;
                echo "$number x $i = $result<br>";
                $i++;
            }
        } else {
            echo "<p>Please enter a positive number to generate the table.</p>";
        }
    }
    ?>
</body>
</html>
