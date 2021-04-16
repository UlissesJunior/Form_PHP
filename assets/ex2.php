<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Exercício 2</title>
</head>
<body>
    <?php

    echo('<h1>Resultado</h1>');

    function delta(int $a, int $b, int $c){
        $delta = (pow($b, 2) + 4*$a*$c);
        return $delta;
    }

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $resultD = delta($a,$b,$c);

    if($resultD == 0){
        echo('Sendo delta menor que zero não existem raízes reais');
    } else {
        
        $x1 = -$b + sqrt($resultD);
        $x2 = -$b - sqrt($resultD);

        echo('X1 = ' . $x1 . '<br>');
        echo('X2 = ' . $x2);
    }


?>
</body>
</html>