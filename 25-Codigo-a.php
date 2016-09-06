<?php 

if(isset($_POST['_lado']) && isset($_POST['_ancho']))
{
//echo "Llegaron";

$superficie ;
$lado = $_POST['_lado'];
$ancho = $_POST['_ancho'];
$superficie = ($lado * $ancho);

echo "$superficie";

?>

<html>
<head>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	
	<title></title>
</head>
<body>

<form action = "25-Index-a.php" method = "POST" ID = "FormIngreso">

<a class ="MiBotonUTN"  href="25-Index-a.php">Volver al inicio</a>

</form>

</body>
</html>



<?php
}
else 
{
echo "Complete Alto y Ancho";

}



?>