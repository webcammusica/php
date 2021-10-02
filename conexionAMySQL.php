<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php
	//Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.
	
	//Conectar a la base de datos
	
	$hostname="localhost";
	$username="id17470503_admini";
    /* Clave de ejemplo, no es la real*/
	$password="dy2W]JvfaG&!ij&M";
	$dbname="id17470503_webcammusica";
	$usertable="ahorros";
	$yourfield = "contrapartida";
	
	$con=mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
	mysqli_select_db($con, $dbname);
	
	# Comprobar si existe registro
	
	$query = "SELECT * FROM $usertable";
	
	$result = mysqli_query($con, $query);
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Nombre: ".$name."br/>";
		}
	}
?>
 </body>
</html>
