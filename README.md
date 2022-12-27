# PHP_Primos
Test técnico de cálculo de números primos en php
------------------------------------------------

26-12-2022

Funcionalidad:

- Dado un número mayor que 2 devuelve un arreglo de todos los números primos desde 2 a dicho número, en orden descendiente.

Validaciones:

- Input restringido a nivel usuario con solo aceptación de números.
- Restringido a 4 dígitos como ingreso máximo para evitar sobrecarga.
- Controlado el no ingreso de valores.
- Controlado ingreso de valores inferiores a 2 o no válidos.

-------------------------
Base de datos:

- No aplica

-------------------------
PHP, Framework y librerias: 

- PHP 7.3.26
- Codeigniter 3.1.13-0
- Jquery 3.6.3
- Bootstrap CSS 5.2.3

-------------------------
API:

- Programado sobre API Rest con la siguiente estructura:

	URL   : http://localhost/php_test_ci3/index.php/primos
	Method: POST
	Data  : 
		nroIngresado (number)

-------------------------
Módulos Composer:

- PHPUnit
- Guzzlehttp
		
-------------------------
Requerimientos externos:

- Cygwin

Debido a que la instalación de PHPUnit utiliza un script escrito en base de Linux, se requiere Cygwin para simular el entorno de Linux. Por lo tanto, se requiere descargar desde el sitio http://cygwin.com/ y reiniciar el SO. 


-------------------------		
UnitTests:

Pruebas unitarias realizadas con Framework PHPUnit:

	- testResultWithOneDigitNum
		- Verifica que código de status en llamada a API sea igual a 200
		- Verifica que al darse el número 7 como parámetro de entrada, el resultado sea el arreglo [7, 5, 3, 2]
		
	- testResultWithTwoDigitNum
		- Verifica que código de status en llamada a API sea igual a 200
		- Verifica que al darse el número 7 como parámetro de entrada, el resultado sea el arreglo [13, 11, 7, 5, 3, 2]
