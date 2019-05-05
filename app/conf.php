<?php


class Conf extends App {
    public $site_name = 'RESTO';
    public $site_main_link = 'http://localhost/4friend/';
    public $limit_money = 10;

    public const dbhost = 'localhost';
    public const dbuser = 'root';
    public const dbpass = '';
    public const dbname = 'rest';

}

$conf = new Conf();


$_SESSION["variables"]['site_name'] = $conf->site_name;
$_SESSION["variables"]['site_main_link'] = $conf->site_main_link;
$_SESSION["variables"]['limit_money'] = $conf->limit_money;
