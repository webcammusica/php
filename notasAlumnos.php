<?php

/*Ejercicio: un colegio con 5 alumnos y se imparten 5 asignaturas: html, css, php, java, sql.
Para cada alumno hay una nota por cada asignatura. Hay que hacer la media para saber si los alumnos están aprobados. 
Las notas serán aleatorias. */

/*Indicar también si está aprobado o suspendido depende de si la media es inferior o superior a 5*/

/*Le damos un valor inicial de 1 a la variable alumno, irá del 1 al 5
Le damos un valor inicial a la variable media de 0, después se realizara el cálculo*/
$alumno = 1;
$media  = 0;
$tabla  = "";

/*mientras que alumno sea menor que 6 (son 5 alumnos)*/
while ($alumno < 6) {
    
    /*Crea para él una nota aleatoria entre 1 y 10 para cada asignatura que indicaremos mediante una variable*/
    
    $html = rand(0, 10);
    $css  = rand(0, 10);
    $php  = rand(0, 10);
    $java = rand(0, 10);
    $sql  = rand(0, 10);
    
    /*después de crearlas calcula la media y la asigna a la variable $media*/
    $media = ($html + $css + $php + $java + $sql) / 5;
    
    /*como añadido, creamos la variable resultado que sera "Aprobado para 5 o más y suspendido si es menor que 5*/
    if ($media < 5) {
        $resultado = "<span>Suspendido</span>";
    } elseif ($media > 4.9 and $html > 4.9 and $css > 4.9 and $php > 4.9 and $java > 4.9 and $sql > 4.9) {
        $resultado = "Aprobado";
    } else {
        $resultado = "<span class='recu'>Aprobado</span>";
    }
    
    /* Todo calculado ya, imprimimos todos los datos*/
    $tabla .= "<tr>
    <td>$alumno</td>
    <td>$html</td>
    <td>$css</td>
    <td>$php</td>
    <td>$java</td>
    <td>$sql</td>
    <td>$media</td>
    <td class='resultado'>$resultado</td></tr>";
    
    /*Al recalcular añade una unidad a la variable alumno, de manera que llegará a 5 y parará*/
    $alumno++;
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
    <meta name="generator" content="no" /> 
    
    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="style.css"/>
    
    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.png" type="image/png" />
        
</head>
<body>

    <div id="container">
    
<h1>Tabla PHP de notas</h1>
<table>
<tr><th>Alumno</th> <th>Html</th><th>Css</th><th>PHP</th><th>Java</th><th>SQL<th>Nota media</th><th>Resultado</th></tr>
<?php

echo $tabla;

?>


</table>

    </div>

</body>
</html>