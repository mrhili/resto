<?php

class Math{

    public static function pourcentage($nombre,$pourcentage)
	{ 
	  $resultat = $nombre * $pourcentage/100;
	  return round($resultat); // Arrondi la valeur
	}
}

$math = new Math();