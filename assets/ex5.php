<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <style>
        body {
        background-color: <?php
        $color = $_POST['color'];
        if (($color=="red")||($color=="blue")||($color=="green")||($color=="lightblue"))
        {
            echo "$color"; 
        }
        else{
            echo "#1b1b22";
        } 
        ?>;
       
    }    
    </style> 
</head>
<body>


</body>
</html>