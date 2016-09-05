<?php 

//el $_POST no muestra el parametro en la url
//el $_GET si muestra el parametro en la url

if(isset($_POST['nombre']))
{
echo $_POST['nombre'];

}
else 
{
echo "Ingrese su nombre";

}

//var_dump($_POST);

?>