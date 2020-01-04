<?php
define('host','localhost');
define ('user', 'root');
define('pass','');
define('dbname','entregas');

$conn=new PDO('mysql:host='.host.';dbname='.dbname.';',user,pass); 

?>