<?php


class Route extends Utilities{

    public static function parameterizer(Array $params){

        $counter = 1;

        $string = '';

        foreach($params as $key => $param ){

            $string.= urlencode($key).'='. urlencode($param);

            if($counter != 1 && $counter != count( $params ) ){

                $string.='&';

            }

            
            $counter++;

        }

        $counter = null;

        return  $string ;

    }

    public static function go($name, $params = null, $urlencode = False ){

        $string = 'Location: '. $name . '.php';


        if($params == null){


            header($string);

            

        }elseif(is_array($params) ){



            header($string.'?'. self::parameterizer( $params) );


        }else{

            $urlencode? header($string.'?'. urlencode( $params) ): header($string.'?'. $params );

        }



    }
}

$route = new Route();