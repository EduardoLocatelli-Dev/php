<?php 

session_id('9kvl7ucpd9lcbhgau8sgbfgq7');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>