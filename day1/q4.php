<?php
$input='{"players":
                [
                    {
                        "name":"Ganguly",
                        "age":45,
                        "address":{"city":"Hyderabad"}
                     },
                     {  "name":"Dravid",
                         "age":45,
                         "address":{"city":"Bangalore"}
                     },
                     {
                         "name":"Dhoni",
                         "age":37,
                         "address":{"city":"Ranchi"}
                     },
                     {
                         "name":"Virat",
                         "age":35,
                         "address":{"city":"Delhi"}
                     },
                     {
                         "name":"Jadeja",
                         "age":35,
                         "address":{"city":"Hyderabad"}
                     },
                     {
                         "name":"Jadeja",
                         "age":35,
                         "address":{"city":"Mumbai"}
                     }
                 ]
        }';
$output=json_decode($input);
$names=array();
foreach ($output->players as $elem) {
    array_push($names,$elem->name);
}
foreach ($names as $name) {
    echo "$name"." ";
}
$age=array();
$maxAge=0;
foreach ($output->players as $elem) {
    array_push($age,$elem->age);
    $maxAge=max($maxAge,$elem->age);
}
foreach ($age as $item) {
    echo "$item"." ";
}
$city=array();
foreach ($output->players as $elem) {
    array_push($city,$elem->address->city);
}
foreach ($city as $item) {
    echo "$item"." ";
}

print_r(array_unique($names));

$maxAgePlayerNames=array();
foreach ($output->players as $elem) {
    if($elem->age==$maxAge) {
        array_push($maxAgePlayerNames,$elem->name);
    }
}
foreach ($maxAgePlayerNames as $item) {
    echo "$item"." ";
}