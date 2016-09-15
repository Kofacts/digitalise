<?php

include "header.php";

//check if my db is connected
$server="localhost";
$name="root";
$password=""; //change to yours or leave field is no password. 
$db_name="digitalise"; //You can change this based on your DB structure.
$connect= new mysqli($server,$name,$password,$db_name);
//check if it is connected.


//My DB is actually connected.


//This is the main section of the Page. 



include "footer.php";

?>
