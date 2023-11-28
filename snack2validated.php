<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

if (strlen($name) < 3 || is_nan($age) || !str_contains("$email", ".") || !str_contains("$email", "@")) {
    define("Warning", "Accesso negato");
    echo Warning;
} else {
    define("Succes", "Accesso riuscito");
    echo Succes;
}

?>