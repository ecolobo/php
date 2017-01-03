
<?php
$link = mysql_connect('146.148.107.234', 'root', 'Escudo2430!');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
