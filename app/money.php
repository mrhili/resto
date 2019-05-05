<?Php

class Money {
	public static function limit($money)
	{ 
		return $money > $_SESSION["variables"]['limit_money']? $money : $_SESSION["variables"]['limit_money'] ;
	}
}


$money = new Money();