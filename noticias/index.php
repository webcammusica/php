<?php
//Ejercicio: Almacena una noticia con título+entradilla+noticia en tres variables, el título irá en un h1 y y la entradilla en un h2 en el body 
//y el texto separado en párrafos en la variable
$titulo = "Los vehículos de la Ertzaintza reciben tres multas cada día";
$entradilla ="Los coches del parque móvil del Departamento de Seguridad acumularon 1.123 sanciones el pasado año, la mayoría por exceso de velocidad y no pagar la OTA";
$texto = "<p>Los vehículos oficiales pertenecientes al Departamento de Seguridad del Gobierno vasco recibieron 1.123 multas el pasado año, lo que equivale a tres cada día, incluidos domingos y festivos. Esa cifra es inferior en un 36,6% a la registrada en 2012, el último ejercicio del Ejecutivo de Patxi López, según se desprende de los datos que ha ofrecido la consejería en una comunicación enviada al Parlamento en respuesta a una pregunta formulada por el portavoz de UpyD, Gorka Maneiro.</p>

<p>
La gran mayoría de las sanciones impuestas a automóviles de la Ertzaintza, con o sin distintivo exterior, fueron consecuencia de su velocidad o del impago de la OTA al aparcar en zonas reguladas por esa tasa. El departamento ha identificado a “todos los conductores y conductoras” que han cometido las infracciones, salvo en 92 de los casos, el 8% del total. A todos ellos les ha notificado la denuncia, así como que ha transmitido sus datos a los responsables de Tráfico. El ejercicio precedente no fueron localizados 370, cuatro veces más.</p>
<p>
El Gobierno vasco recuerda que las multas son abonadas por los empleados públicos que “tienen asignado o utilizan ocasionalmente alguno de los vehículos adscritos al parque móvil” que han cometido la infracción. Una reciente circular de la Ertzaintza estipula que los policías se harán cargo el importe de la sanción siempre que no puedan justificar las razones de servicio que les empujaron a infringir las normas de tráfico mientras conducían un vehículo del parque móvil.</p>";

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<!--Etiquetas meta -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="author" content="" />
	<meta name="generator" content="" /> 
	
	<!--CSS-->
	<link type="text/css" rel="stylesheet" href="style.css"/>
	
	<!--Favicon-->
	<link rel="shortcut icon" href="favicon.png" type="image/png" />
	
</head>
<body>

	<div id="container">

	<?php
	echo "<h1>$titulo</h1>"."<h2>$entradilla</h2>".$texto;
	?>

	</div>

</body>
</html>