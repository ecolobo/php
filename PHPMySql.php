<?php
$host = '146.148.107.234';
$username = 'daniel_lobo';
$password= 'Escudo2430!';
$conStr = "firebird:dbname={$host};User={$username};Password={$password};Port=3050;"; 
$DB = new PDO($conStr);
?>
