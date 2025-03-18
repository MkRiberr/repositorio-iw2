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

        echo "<h1>A tabuada do numero $n1 é : </h1>";
        for($i = 1; $i <=10 ; $i++) {
            $resultado = $n1 * $i ;
            echo "$n1 x $i = $resultado <br>"; 
        }


    ?>
    
</body>
</html>