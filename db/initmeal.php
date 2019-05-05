<?Php

$types = $conn->query('SELECT id, name FROM types');

$costumers = $conn->query('SELECT id, name, last_name FROM costumers');

$arounds = $conn->query('SELECT id, name, price FROM arounds');

$sizes = $conn->query('SELECT id, name FROM sizes');






/*
$tools::debug( $costumers );

$tools::debug( $arounds );

$tools::debug( $sizes );

$tools::debug( $types );
*/
