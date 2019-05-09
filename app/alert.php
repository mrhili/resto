<?php


class Alert extends Utilities{




    public static function write($message){

        $_SESSION['stop_html'] = True;


        return "<html><body>".$message."</body></html>";


    }
}

$alert = new Alert();