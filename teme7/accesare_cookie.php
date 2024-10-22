<?php
if(!isset($_COOKIE["name"])){
    $_COOKIE["name"] = 'test';
}
echo "Numele meu este " . $_COOKIE["name"] . ".";
echo "<br>";
if(!isset($_COOKIE["age"])){
    $_COOKIE["age"] = 'test';
}
echo "Varsta mea este " . $_COOKIE["age"] . " ani.";
echo "<br>";
if(!isset($_COOKIE["city"])){
    $_COOKIE["city"] = 'test';
}
echo "Locuiesc in orasul " . $_COOKIE["city"] . ".";
