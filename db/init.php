<?php


class InitDB extends Alert{


    public static function init(){

        $conf = new Conf();


        try {

            $conn = new PDO("mysql:host=".$conf::dbhost.";dbname=".$conf::dbname, $conf::dbuser, $conf::dbpass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            unset($_SESSION['stop_html']);


            return $conn;
        
        
        }catch(PDOException $e) {
        
                echo self::write( $e->getMessage() );
        
                
        
        }



    }




}

$init_db = new InitDB();