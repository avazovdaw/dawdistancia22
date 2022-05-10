<?php
/**
*@internal Este documento contiene dos funciones simples de php
*@author Ana Vázquez Oviedo
* @version 1.0
*/

/**
*Función saludo
*Esta función concatena una frase de saludo con un nombre y apellido.
*@param nombre de la persona.
*@param apellido de la persona.
*@return saludo completo.
*/

function saludo($nombre, $apellido){
$inicio = "Bienvenido/a ";
$fin = " Gracias por su visita.";
$saludo = $inicio . $nombre . " " . $apellido . ".".$fin;

return $saludo;

}



/*
*Función multiplicar
* Esta función multiplica dos números dados por parámetro.
*@param num1 numero 1 para multiplicar.
*@param num2 numero 2 para multiplicar.
*@return resultado de la multiplicación.
*/


function multiplicar ($num1, $num2){
$resultado = $num1 * $num2;
return $resultado;

}

echo multiplicar(2,4);
echo "<br>";
echo saludo("Ana", "Vázquez");


/*Comentario de prueba para github*/

echo "Cambio para github";
