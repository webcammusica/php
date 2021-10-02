
<?php
$titulo    = "Webcam música";
$lema      = "programación web";
$resultado = "<div id='rojo'><h1>$titulo</h1>";
$resultado .= "<h2>$lema</h2>";
$resultado .= "</div>";
?>

<!DOCTYPE html>
<html>
 
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>El primer documento PHP</title>
</head>
 
<body>
    <div id="container">
    
<?php
echo "<h1>$titulo</h1><h2>$lema</h2>";

echo $resultado;

?>
   </div>
</body>
 
</html>