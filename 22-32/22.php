<?php

$my_array = [
    "name" => "Amar",
    "age" => "21",
    "class" => "ty c"
]; 
echo "<h2>Looping through array</h2>";
foreach ($my_array as $key => $value ){
    echo "<b>$key :</b> $value <br>" ;
}

echo "<h2>Accessing through loops</h2>";
echo "Name :" . $my_array["name"]. "<br>";
echo "Age :" . $my_array["age"]. "<br>";


?>