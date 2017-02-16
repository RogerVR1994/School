<?php
   	include 'medconnect.php';
   	
   	$link=db_Connection();

      $nombre=$_POST["nombre"];
	  $med1=$_POST["med1"];
	  $frec1=$_POST["frec1"];
	  $med2=$_POST["med2"];
	  $frec2=$_POST["frec2"];
	  $med3=$_POST["med3"];
	  $frec3=$_POST["frec3"];
	  $med4=$_POST["med4"];
	  $frec4=$_POST["frec4"];
	  $peticion="INSERT INTO Med VALUES (NULL, '".$nombre."', '" .$med1."', $frec1, '" .$med2."', $frec2, '" .$med3."', $frec3, '" .$med4."', $frec4)";

    $link->query($peticion);

   	$link->close();

	echo $actividad;
   	header("Location: home.php");
?>
