<?php

class Math extends Utilities{

    public static function pourcentage($nombre,$pourcentage)
	{ 
	  $resultat = $nombre * $pourcentage/100;
	  return round($resultat); // Arrondi la valeur
	}
}

$math = new Math();