<?php

function maskPhoneNumber($number){

    $mask_number =  substr( $number, 0, 2 )
        .str_repeat( '*', ( strlen( $number ) - 4 ) )
        .substr( $number, -2 );
    return $mask_number;
}
echo maskPhoneNumber('9876543210');

?>