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
        $x =$_POST["x"];
        $y =$_POST["y"];
        $z =$_POST["z"];

        $mult= $x*$y*$z;

        echo "o volume da caixa é $mult";

    ?>
    
</body>
</html>