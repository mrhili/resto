<?php


class Tools{




    public static function deepdebug(  ){

        ini_set('display_errors', 'On');
        error_reporting(E_ALL | E_STRICT);

    }

    public static function debug( $todebug ){

        echo '<pre>';

        if( is_array( $todebug ) ){

            print_r ( $todebug);
        }else{

            var_dump($todebug);
        }

        echo '</pre>';

    }


}

$tools = new Tools();