<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "support";

$db_connect = mysqli_connect($server, $username, $password, $database);
if($db_connect){
    echo("Connection To Database was successful");
}

else{
    echo("Connection To Database wasn't succeeful, please try again");
    Location("index.html");
}

?>   