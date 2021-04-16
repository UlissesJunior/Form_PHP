<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Exercício 6</title>

</head>
<body>
    
<?php
        $tria = $_POST['tria'];
        $trib = $_POST['trib'];
        $tric = $_POST['tric'];
        if (($tria>=$trib)&&($tria>=$tric))
        {
            echo "<h1>Nenhum Triângulo é formado</h1>"; 
        }
        else if (pow($tria, 2)==(pow($trib, 2)+pow($tric, 2))) { 
            echo "<h1>Triângulo Retângulo</h1>";
        } 
        else if (pow($tria, 2)>(pow($trib, 2)+pow($tric, 2))) { 
            echo "<h1>Triângulo Obtusângulo</h1>";
        } 
        else if (pow($tria, 2)<(pow($trib, 2)+pow($tric, 2))) { 
            echo "<h1>Triângulo Acutângulo</h1>";
        } 
        ?>

</body>
</html>