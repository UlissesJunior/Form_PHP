<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Exercício 3</title>

</head>
<body>
    
<?php
        $tria = $_POST['tria'];
        $trib = $_POST['trib'];
        $tric = $_POST['tric'];
        if (($tria==$trib)&&($tria==$tric))
        {
            echo "<h1>Triângulo Equilátero</h1>"; 
        }
        else if (($tria!=$trib)&&($tria!=$trib)) { 
            echo "<h1>Triângulo Escaleno</h1>";
        } 
        else if (($tria==$trib)||($tria==$tric)||($trib==$tric)) {
            echo "<h1>Triângulo Isósceles</h1>";
        }
        ?>

</body>
</html>