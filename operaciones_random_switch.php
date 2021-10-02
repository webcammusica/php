<?php
/*Ejercicio: Imprime en pantalla dos números aleatorios del 1 al 50 y consigue
que cada vez que la pagina se carga realice una operación aritmética aleatoria que sea
suma, resta, división o multiplicación*/

//Declara las variables de los números aleatorios
$num1 = rand(1, 50);
$num2 = rand(1, 50);

//Declara la variable como aleatoria

$signo = rand(1, 4);
switch (rand(1, 4)) {
    
    case 1:
        $signo = "+";
        break;
    case 2:
        $signo = "-";
        break;
    case 3:
        $signo = "/";
        break;
    case 4:
        $signo = "x";
        break;
}

//Indica la operación aritmética que debe realizar segun el valor de la variable $signo a través de operadores lógicos
switch ($signo) {
    case "+":
        $resultado1 = $num1 + $num2;
        break;
    case "-":
        $resultado1 = $num1 - $num2;
        break;
    case "/":
        $resultado1 = $num1 / $num2;
        break;
    case "x":
        $resultado1 = $num1 * $num2;
        break;
}


//Otra manera de hacerlo

//Declaramos las variables de numeros (dejamos las que ya están arriba)
//Declaramos  el aleatorio

$sign = rand(1, 4);
switch ($sign) {
    case 1:
        $resultado2 = $num1 + $num2;
        $operando   = "+";
        break;
    case 2:
        $resultado2 = $num1 - $num2;
        $operando   = "-";
        break;
    case 3:
        $resultado2 = $num1 / $num2;
        $operando   = "/";
        break;
    case 4:
        $resultado2 = $num1 * $num2;
        $operando   = "*";
        break;
        
}


?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    
    <!--Etiquetas meta -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="raul" />
    <meta name="generator" content="Bluefish 2.2.6" /> 
    
    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <style type="text/css">
    h2,h1{text-align: center;}
    </style>
    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.png" type="image/png" />
        
</head>
<body>

<?php
//Imprime en pantalla los números y signo aleatorio, y el resultado que dan.
echo "<h2>$num1</h2><h2>$signo</h2><h2>$num2</h2><h1>$resultado1</h1><h2>$num1</h2><h2>$operando</h2><h2>$num2</h2><h1>$resultado2</h1>";
?>

</body>
</html>