<?php
$nombre =$_GET['nombre'];
$correo =$_GET['correo'];
echo "Hola que tal ".$nombre."Tu correo es: ".$correo;

$para=$correo;
$titulo="prueba";
$mensaje="Esta es una prueba";
$quienloenvia="rodolfo.mena@yahoo.com";
$digito_verificador=rand(10,20)

mail($para,$titulo,$mensaje,$quienloenvia);
?>