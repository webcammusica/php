<?php
//Ejercicio: crear una serie del 1 al 100 usando un bucle
//Damos valor 1 a la variable x
$x = 1;
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
// le decimos que mientras x sea menor que 101 se imprima (y separamos cada impresión con un guión)
while ($x < 101) {
    if($x!=100){
       echo $x . " - "; 
    }else{
        echo $x;
    }
    
    /*para que no se imprima infinitamente el 1 (al ser menor que 101 no se detiene el bucle) a continuación de la primera impresión le decimos que sume una unidad a la variable x, de manera que ahora será dos, después 3 y así consecutivamente hasta que llegue a 100 y deje de cumplirse el while*/
    $x += 1;
}

?>
   </div>

</body>
</html>