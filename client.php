<?php
require 'lib/nusoap.php';

$client = new nusoap_client("http://localhost/Pracitcal%203/server.php?wsdl");

$addition = $client->call('addition', array('a' => '5', 'b' => '5'));
$subtraction = $client->call('subtraction', array('a' => '5', 'b' => '5'));
$multiplication = $client->call('multiplication', array('a' => '5', 'b' => '5'));
$division = $client->call('division', array('a' => '5', 'b' => '5'));

echo $addition . " " . $subtraction . " " . $multiplication . " " . $division;
