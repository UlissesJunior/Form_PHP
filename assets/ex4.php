<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Exercício 4</title>
</head>
<body>
    <?php 
        $name = $_POST['name'];
        echo "<h1>$name</h1>";
		$peso = $_POST['peso'];
		$altura = $_POST['altura'];
		
		$conta1 = $altura*$altura;
		$conta2 = $peso/$conta1;
		
		$resultado = number_format($conta2);
		
			echo "<h1>Seu IMC é: $resultado</h1>";
		?>
</body>
</html>
