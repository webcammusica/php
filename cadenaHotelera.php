<?php

/*Una cadena hotelera con 5 hoteles. NH Madrid, NH Barcelona, NH Marbella, NH Ibiza, NH Menorca*/
//Se podría hacer más fácil, pero lo hacemos con un while

$hotel    = 1;
$ganancia = 0;
$total    = 0;

$array_hoteles = array(
    "NH Barcelona",
    "NH Madrid",
    "NH Marbella",
    "NH Ibiza",
    "NH Menorca"
);

while ($hotel < 6) {
    
    $ganancia = rand(5000, 1000000);
    echo "<p>el hotel {$array_hoteles[$hotel-1]} ha ganado $ganancia</p>";
    
    $total = $total + $ganancia;
    
    $hotel++;
}
echo "<p>El total de beneficio de todos los hoteles es <strong>$total</strong> </p>";

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
    
<?php

?>


</table>

    </div>

</body>
</html>