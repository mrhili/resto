<?Php

if( !isset($_SESSION['logged']) ){

$previous = "javascript:history.go(-1)";

header('Location: ' . $previous );

exit;


}