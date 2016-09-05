<html>
<head>
	<title></title>
</head>
<body>

<form action = "destino.php" method = "POST">
<!--method = "POST o GET" - Método HTTP empleado al enviar el formulario

action = "url" - Indica la URL que se encarga de procesar los datos del formulario

el ?  en una url marca un parametro-->

<label>Nombre</label>
<input type="text" placeholder = "texto grisado, placeholder"  name ="nombre">
<input type="text" name ="numero uno">

<input type = "submit">
</form>

<?php 

//var dump para inspeccionar variables
//variables globales se acceden de cualquier lado

//var_dump($_GET);
//get es un array y tiene datos

//echo $_GET['nombre'];

//los formularios por defecto se cargan a si mismo
//isset pregunta si es null
/*
if(isset($_POST['nombre']))
{
echo $_POST['nombre'];

}
else 
{
echo "Ingrese su nombre";

}

/*

if(isset($_GET['nombre']))
{
echo $_GET['nombre'];

}
else 
{
	?>
	<form>
<!--el ?  en una url marca un parametro-->
<label>Nombre</label>
<input type="text" placeholder = "texto grisado, placeholder"  name ="nombre">
<input type="text" name ="numero uno">

<input type = "submit">
</form>
<php
echo "Ingrese su nombre";

}
*/

?>



</body>
</html>
