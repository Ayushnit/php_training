<?php
function snakeToCamel($input, $separator = '_')
{
    return lcfirst(str_replace($separator, '', ucwords($input, $separator)));
}
$input=array("snake_case","camel_case");
$result=array();
foreach ($input as $elem) {
    array_push($result,snakeToCamel($elem));
}
foreach ($result as $elem) {
    echo "$elem"." ";
}
?>

