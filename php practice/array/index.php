<?php
$colors = ["Red", "Green", "Blue"];
echo $colors[0]; 


foreach ($colors as $color) {
    echo $color . " ";
}

$user = [
    "name" => "Phageph",
    "age" => 25,
    "city" => "Wonderland"
];

echo $user["name"]; 

$users = [
    ["name" => "Phageph", "age" => 25],
    ["name" => "Stones", "age" => 30]
];
echo $users[1]["name"]; 
echo $users[1]["age"]

?>