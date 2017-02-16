<?php



 function db_Connection(){

    $server="localhost";
    $user="root";
    $pass="Ro9311o/";
    $db="Med";

    $connection = new mysqli($server, $user, $pass, $db);
    if (!$connection) {
        die('Could not connect: ' .$connection->connect_error);
    }
    //$tempreratura=$_POST["t"];
    //$actividad=$_POST["a"]; 
   //echo 'Connected successfully';
    return $connection;
}



?>
