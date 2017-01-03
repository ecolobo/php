<?php

$hostname="146.148.107.234";

$hostuser="root"; // by default it will be root for localhost

$hostpassword="Escudo2430!";

$database="guestbook";

$connection=""; // initialize connection variable

try

{

$connection =mysqli_connect($hostname,$hostuser,$hostpassword);

// to establish a connection with your specified hostname

if(!$connection||!mysqli_select_db($connection,$database))

// to select a database with that configured link $connection

{

$message=" Please Switch on your WAMP server  ";

echo "<script type='text/javascript'>alert('$message');</script>";

// echoing error if any problem with selection or with connection

}

else

{

echo(" Connection established successfully ");

// successful connection, your work goes from here

}

}

catch(Exception $e)

{

die($e);

}

?>
