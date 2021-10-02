<?php
//Ejercicio: imprimir por pantalla la tabla de multiplicar del 6. Hasta el 6x9

//Valor 1 a la variable multiplicador porque empezaremos esta vez por 6x1=6
//Valor 0 a la variable total que luego será modificado
$multiplicador = 1;
$total         = 0;
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
    
    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.png" type="image/png" />
        
</head>
<body>

    <div id="container">

<ul>
    <?php

while ($multiplicador < 11) {
    $total = $multiplicador * 6;
    echo "<li>6 X $multiplicador = $total</li>";
    $multiplicador++;
}

?>
</ul>

    </div>

</body>
</html>