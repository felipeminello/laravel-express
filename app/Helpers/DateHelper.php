<?php
namespace App\Helpers;


class DateHelper
{
	public static function timelize($str)
	{
		$str = str_replace(' ', '', trim($str));

		$data = substr($str, 0, 10);

		if (strpos($data, '/')) {
			$arrayData = explode('/', $data);

			$dia = $arrayData[0];
			$mes = $arrayData[1];
			$ano = $arrayData[2];
		} elseif (strpos($data, '-')) {
			$arrayData = explode('-', $data);

			$dia = $arrayData[2];
			$mes = $arrayData[1];
			$ano = $arrayData[0];
		} else {
			return false;
		}

		if (checkdate($mes, $dia, $ano)) {
			if (strlen($str) > 10) {
				$time = substr($str, 10, 8);
				$arrayTime = explode(':', $time);

				$hora = $arrayTime[0];
				$minuto = $arrayTime[1];
				$segundo = $arrayTime[2];
			} else {
				$hora = 0;
				$minuto = 0;
				$segundo = 0;
			}

			return mktime($hora, $minuto, $segundo, $mes, $dia, $ano);
		} else
			return false;
	}

}