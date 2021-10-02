<?php
//Crea una variable que almacene los nombres de una lista de alumnos en forma de lista. Imprímelo en el body.

$lista = "<li>Nerea</li>";
$lista .= "<li>Iker</li>";
$lista .= "<li class='bianca'>Bianca</li>";
$lista .= "<li>Adolfo</li>";
$lista .= "<li>Rakel</li>";
$lista .= "<li>Isabel</li>";
$lista .= "<li>Fernando</li>";
$lista .= "<li>Amaia</li>";
$lista .= "<li>Juan Carlos</li>";
$lista .= "<li>Uxue</li>";
$lista .= "<li>Sonia</li>";
$lista .= "<li>Alfonso</li>";
$lista .= "<li>Juan</li>";


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
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	
	<!--Favicon-->
	<link rel="shortcut icon" href="favicon.png" type="image/png" />
	
</head>
<body>

	<div id="container">
	
	<ul>
		<?php

			echo $lista;

		?>	
	</ul>
	</div>

</body>
</html>