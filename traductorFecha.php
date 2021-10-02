<?php

$diasemana = date("l");
$dia       = date("j");
$mes       = date("F");
$anno      = date("Y");


if ($diasemana == "Monday") {
    $diasemana_e = "lunes";
} elseif ($diasemana == "Tuesday") {
    $diasemana_e = "martes";
} elseif ($diasemana == "Wednesday") {
    $diasemana_e = "miércoles";
} elseif ($diasemana == "Thursday") {
    $diasemana_e = "jueves";
} elseif ($diasemana == "Friday") {
    $diasemana_e = "viernes";
} elseif ($diasemana == "Saturday") {
    $diasemana_e = "sábado";
} else {
    $diasemana_e = "domingo";
}


if ($mes == "January") {
    $mes_e = "Enero";
} elseif ($mes == "February") {
    $mes_e = "Febrero";
} elseif ($mes == "March") {
    $mes_e = "Marzo";
} elseif ($mes == "April") {
    $mes_e = "Abril";
} elseif ($mes == "May") {
    $mes_e = "Mayo";
} elseif ($mes == "June") {
    $mes_e = "Junio";
} elseif ($mes == "July") {
    $mes_e = "Julio";
} elseif ($mes == "August") {
    $mes_e = "Agosto";
} elseif ($mes == "September") {
    $mes_e = "Septiembre";
} elseif ($mes == "October") {
    $mes_e = "Octubre";
} elseif ($mes == "November") {
    $mes_e = "Noviembre";
} else {
    $mes_e = "Diciembre";
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
    <meta name="author" content="bianca14" />
    <meta name="generator" content="Bluefish 2.2.6" /> 
    
    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="style.css"/>
    
    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.png" type="image/png" />
        
</head>
<body>

    <div id="container">
<?php
echo "<h1>Hoy es $diasemana_e , $dia de $mes_e de $anno</h1>";
?>
   </div>

</body>
</html>