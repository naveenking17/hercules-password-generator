<?php
$arrr = $_GET["length1"];
function rand_string( $length ) {
	

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}

echo rand_string($arrr);
?>
