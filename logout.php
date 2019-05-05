<?php

    include_once( "init.php");

    if( isset($_SESSION['logged']) ){

        session_destroy();

        header('Location: index.php');


    }else{

        $previous = "javascript:history.go(-1)";

        header('Location: ' . $previous );

        exit;

    }

	
	
?>