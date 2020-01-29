<?php

$dbhost = "altiorem.dev";
$dbuser = "gustavo";
$dbpass = "4lti0rem";
$db = "mcf";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die('Conexão falhou'.$conn->error);
$conn->set_charset('utf-8')

?>