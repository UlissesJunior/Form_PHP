<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 2</title>
</head>
<body>
    <?php 
        $name = $_POST["name"];
        echo "<h1>$name</h1>"; 
        $databorn = $_POST["databorn"];
        $date = new DateTime ($databorn);
        $interval = $date->diff(new DateTime(date('Y-m-d')));
        echo $interval->format ('%Y anos'); 
    ?>
</body>
</html>