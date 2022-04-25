<?php
require 'lib/nusoap.php';

function addition($a, $b) {
    return $a + $b;
}

function subtraction($a, $b) {
    return $a - $b;
}

function multiplication($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b === 0)
        return 0;
    return $a / $b;
}

$server = new nusoap_server();
$server->configureWSDL("Arithmetic Calculations", "urn:Arithmetic Calculations");
$server->register(
    "addition",
    array("a" => "xsd:integer", "b" => "xsd:integer"),
    array("return" => "xsd:integer")
);
$server->register(
    "subtraction",
    array("a" => "xsd:integer", "b" => "xsd:integer"),
    array("return" => "xsd:integer")
);
$server->register(
    "multiplication",
    array("a" => "xsd:integer", "b" => "xsd:integer"),
    array("return" => "xsd:integer")
);
$server->register(
    "division",
    array("a" => "xsd:integer", "b" => "xsd:integer"),
    array("return" => "xsd:integer")
);

$server->service(file_get_contents("php://input"));
