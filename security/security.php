<?php

class Security{

    public static function logFilter(){
        if( !isset($_SESSION['logged']) ){


            self::back();

        }

    }

    public static function superAdminFilter(){

        $redirectBack = True;

        if( !isset($_SESSION['logged'] ) ){

            if( !isset($_SESSION['role'] ) ){

                if( !isset($_SESSION['role']) !== 2  ){

                    $redirectBack = False;

                }


            }


            

        }

        if( $redirectBack ){
            self::back();
        }

    }


    
}

$security = new Security();