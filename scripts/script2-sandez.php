<?php
/**
* @autor Curro
* @version 1.0
* @internal Script para la tarea 5 actividad 2 del módulo de Despliegue de aplicaciones web
* @since 26/05/2023
*/
/**
* Clase Calculadora configurada para realizar las funciones sumar, restar, multiplicar y dividir
*/
class Calculadora {

/**
* Función que suma los números pasados como parámetros
* @param int $num1 Primer número a sumar
* @param int $num2 Segundo número a sumar
* @return int
*/
  
  public static function sumar($num1, $num2) {
    return $num1 + $num2;
  }
/** 
* Función que resta los números pasados como parámetros 
* @param int $num1 Número inicial 
* @param int $num2 Número que resta al $num1 
* @return int 
*/ 

  public static function restar($num1, $num2) {
    return $num1 - $num2;
  }
/** 
* Función que multiplica los números pasados como parámetros 
* @param int $num1 Número inicial 
* @param int $num2 Número que multiplica al $num1 
* @return int 
*/ 

  public static function multiplicar($num1, $num2) {
    return $num1 * $num2;
  }
/** 
* Función que divide los números pasados como parámetros 
* @param int $num1 Número inicial 
* @param int $num2 Número que divide al $num1 
* @return int 
*/ 

  public static function dividir($num1, $num2) {
    if ($num2 == 0) {
      return "Error: No se puede dividir entre cero.";
    } else {
      return $num1 / $num2;
    }
  }
  
}

?>
