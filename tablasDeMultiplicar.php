<?php
/*Ejercicio: imprimir las tablas de multiplicar usando dos whiles*/

$tabla = "";

//le damos valor 1 a el factor1 de la multiplicacion. Ira del 1 al 9 de la tabla del 1 a la del 9
$multiplicando = 1;


//mientras el factor1 sea menor que 10 (no queremos más tablas solo hasta la del 9)...
while ($multiplicando < 10) {
    $tabla .= "<ul>";
    //El factor será 1 y el total 0 (no está calculado)   
    $total         = 0;
    
    //mientras el factor2 sea menor que 11...cada tabla solo llega a x10
    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++)  {
        
        //el total sera el resultado del producto de los dos factores (de momento sería 1x1=1)
        $total = $multiplicador * $multiplicando;
        //damos valor a la variable que imprimiremos en el body, con un elemento de lista y un .= para que no se sobreescriban
        //de momento solo saldría 1x1=1
        $tabla .= "<li>$multiplicando X $multiplicador = $total</li>";
        
    }
    $tabla .= "</ul>";
    //le decimos que el factor 1 sume 1 hasta el 9, y ya saldrían todas las tablas
    $multiplicando++;
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
    <meta name="author" content="kumo" />
    <meta name="generator" content="" /> 
    
    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="style.css"/>
    
    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.png" type="image/png" />
        
</head>
<body>

    <div id="container">

    <?php
echo $tabla;
?>

    </div>

</body>
</html>