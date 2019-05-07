<?Php

if(!isset( $_SESSION['initialized'] )){

    session_start();

    //echo $_SESSION['variables']['site_name'];

    include_once( "app/init.php");
    include_once( "app/conf.php");
    include_once( "app/alert.php");
    include_once( "app/utilities.php");
    include_once( "app/tools.php");
    include_once( "app/math.php");
    include_once( "app/money.php");
    include_once( "app/route.php");

    /////////////DB

    



    $_SESSION['initialized'] = True;



}

include_once( "db/init.php");

$conn = $init_db::init();

include_once( "db/quickquery.php");


///MODELS
include_once( "db/models/ordering.php");

////






