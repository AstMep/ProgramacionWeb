<?php
$nombre =$_GET['nombre'];
$correo =$_GET['correo'];
echo "Hola que tal ".$nombre."Tu correo es: ".$correo;

$para=$correo;
$titulo="prueba";

$cuerpo_delcorreo="Esta es una prueba<br>saludos";
$quienloenvia="rodolfo.mena@yahoo.com";
$digito_verificador=rand(10,20)

mail($para,$titulo,$quienloenvia);
?>

estimado rodolfo mena
gracias por agregarte a la plataforma,su codigo 
verificacion es:2342