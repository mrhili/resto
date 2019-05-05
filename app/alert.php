<?php


class Alert{




    public static function write($message){

        $_SESSION['stop_html'] = True;


        return "<html><body>".$message."</body></html>";


    }
}

$alert = new Alert();