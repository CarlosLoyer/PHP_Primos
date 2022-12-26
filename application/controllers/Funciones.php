<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*Clase controlador que aloja funciones principales para el requerimiento, sobre extensión de
REST_Controlle para implementación de API Rest*/
require APPPATH . '/libraries/REST_Controller.php';
class Funciones extends REST_Controller
{
	function __construct()
	{
		parent::__construct();
	}


	/*Función que recibe el número ingresado y recorre desde 2 hasta dicho número (considerándolo),
	aplicando una función de análisis básico que determina si dicho número es o no un número primo,
	donde, si el resultado es positivo, lo agrega al arreglo que será devuelto como resultado.
	*/
	public function calcPrimos_post()
	{
		$nroIngresado = $this->post("nroIngresado");
		$numerosPrimos = [];

		if (is_numeric($nroIngresado) && $nroIngresado >= 2) {

			for ($j = 2; $j <= $nroIngresado; $j++) {

				if ($this->esPrimo($j)) {
					array_push($numerosPrimos, $j);
				}
			}

			echo json_encode(array_reverse($numerosPrimos));
		} else {
			echo json_encode("Tipo o valor no permitido");
		}
	}

	//Función que devuelve true o false cuando un número obtenido como parámetro, es o no es primo.
	public function esPrimo($numero)
	{

		for ($i = 2; $i < $numero; $i++) {

			if ($numero % $i === 0) {
				return false;
			}
		}

		return $numero !== 1;
	}
}
