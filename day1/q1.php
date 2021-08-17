<?php
function array_flatten($array) {
    if (!is_array($array)) {
        return false;
    }
    $result = array();
    foreach ($array as $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        } else {
            $result = array_merge($result, array($value));
        }
    }
    return $result;
}

$input=array(2,3,array(4,5),array(6,7),8);
$result=array_flatten($input);
foreach ($result as $elem) {
    echo "$elem"." ";
}
?>
