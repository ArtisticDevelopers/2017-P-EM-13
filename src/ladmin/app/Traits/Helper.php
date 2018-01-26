<?php

namespace App\Traits;

trait Helper
{
	public function first_letters($string, $upper)
	{
		$string = trim($string);
		$words = explode(" ", $string);
		$acronym = "";
		
		foreach ($words as $w) 
		{

		  $acronym .= $w[0];
		}

		if($upper == true)
		{
			$acronym = strtoupper($acronym);
		}

		return $acronym;
	}
}