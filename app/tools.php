<?php


class Tools{




    public static function deepdebug(  ){

        ini_set('display_errors', 'On');
        //E_ALL | E_STRICT
        error_reporting(E_ALL);

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