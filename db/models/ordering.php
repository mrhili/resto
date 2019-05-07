<?php

class Ordering extends QuickQuery{

    public static $table ="orderings";

    public static function getCostumer($id)
	{ 
	  return self::first_row( 'costumers', $id );
    }
    
    public static function getSize($id)
	{ 
	  return self::first_row( 'sizes', $id );
    }

    public static function getUser($id)
	{ 
	  return self::first_row( 'users', $id );
    }

    public static function getArounds($ordering_id)
	{ 
	  return self::rows( 'around_ordering', compact('ordering_id') );
    }

    public static function getIt($id)
	{ 
	  return self::first_row( self::$table, $id );
    }


    public static function getItWell($id)
	{ 

      $ordering =  self::getIt($id);
      
      $ordering->size = self::getSize($id);
      $ordering->user = self::getUser($id);
      $ordering->costumer = self::getCostumer($id);
      $ordering->arounds = self::getArounds($id);

      return $ordering;

    }
    
}

$ordering_model  = new Ordering();