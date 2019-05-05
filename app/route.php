<?php


class Route{

    public static function go($name, $param = null){



        header('Location: /'. $name . '.php');

    }
}

$route = new Route();