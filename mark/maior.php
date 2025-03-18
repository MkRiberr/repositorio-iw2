<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $maior = $n1;
        if ($n2 > $maior) {
            $maior = $n2; 
        }

        if ($n3 > $maior) {
            $maior = $n3;
        }

        echo "<h2>O maior número é: $maior</h2>";

        


    ?>
    
</body>
</html>