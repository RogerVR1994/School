<?php 

$tierra = $_POST["tierra"];
$motriz = $_POST["motriz"];
$salida = $_POST["salida"];
$conector = $_POST["conector"];

#echo $tierra."<br>".PHP_EOL;
#echo $motriz."<br>".PHP_EOL;
#echo $conector."<br>".PHP_EOL;
#echo $salida."<br>".PHP_EOL;

$L = max ($tierra , $motriz , $conector , $salida);
#echo $L;
$S = min ($tierra , $motriz , $conector , $salida);
#echo $S;

if ($tierra==$conector && $tierra==$salida && $tierra==$motriz){
	echo "<h1>Se puede construir el mecanismo, pero no es posible moverlo</h1>";
}

elseif ($tierra==0 || $motriz==0 || $salida==0 || $conector==0){
	echo "<h1>¡Error! No es un mecanismo de cuatro barras</h1>";
}
elseif ($tierra>$motriz && $tierra>$salida && $tierra>$conector){
	echo "<h1>¡Error! No se puede construir</h1>";
}

else{
	if ($L==$tierra){
		if ($S==$motriz){
			echo "L=".$tierra."<br>".PHP_EOL;
			echo "S=".$motriz."<br>".PHP_EOL;
			$P=$conector;
			$Q=$salida;
			echo "P=".$conector."<br>".PHP_EOL;
			echo "Q=".$salida."<br>".PHP_EOL;
		}
		elseif ($S==$salida){
			echo "L=".$tierra."<br>".PHP_EOL;
			echo "S=".$salida."<br>".PHP_EOL;	
			$P=$conector;
			$Q=$motriz;
			echo "P=".$conector."<br>".PHP_EOL;
			echo "Q=".$motriz."<br>".PHP_EOL;
		}
		elseif ($S==$conector){
			echo "L=".$tierra."<br>".PHP_EOL;
			echo "S=".$conector."<br>".PHP_EOL;
			$P=$motriz;
			$Q=$salida;
			echo "P=".$motriz."<br>".PHP_EOL;
			echo "Q=".$salida."<br>".PHP_EOL;
		}
	}
	elseif ($L==$motriz){
		if ($S==$tierra){
			echo "L=".$motriz."<br>".PHP_EOL;
			echo "S=".$tierra."<br>".PHP_EOL;
			$P=$conector;
			$Q=$salida;
			echo "P=".$conector."<br>".PHP_EOL;
			echo "Q=".$salida."<br>".PHP_EOL;
		}
		elseif ($S==$salida){
			echo "L=".$motriz."<br>".PHP_EOL;
			echo "S=".$salida."<br>".PHP_EOL;
			$P=$conector;
			$Q=$tierra;
			echo "P=".$conector."<br>".PHP_EOL;
			echo "Q=".$tierra."<br>".PHP_EOL;
		}
		elseif ($S==$conector){
			echo "L=".$motriz."<br>".PHP_EOL;
			echo "S=".$conector."<br>".PHP_EOL;
			$P=$tierra;
			$Q=$salida;
			echo "P=".$tierra."<br>".PHP_EOL;
			echo "Q=".$salida."<br>".PHP_EOL;
		}	
	}
	elseif ($L==$conector){
		if ($S==$motriz){
			echo "L=".$conector."<br>".PHP_EOL;
			echo "S=".$motriz."<br>".PHP_EOL;
			$P=$tierra;
			$Q=$salida;
			echo "P=".$tierra."<br>".PHP_EOL;
			echo "Q=".$salida."<br>".PHP_EOL;
		}
		elseif ($S==$salida){
			echo "L=".$conector."<br>".PHP_EOL;
			echo "S=".$salida."<br>".PHP_EOL;
			$P=$tierra;
			$Q=$motriz;
			echo "P=".$tierra."<br>".PHP_EOL;
			echo "Q=".$motriz."<br>".PHP_EOL;	
		}
		elseif ($S==$tierra){
			echo "L=".$conector."<br>".PHP_EOL;
			echo "S=".$tierra."<br>".PHP_EOL;
			$P=$motriz;
			$Q=$salida;
			echo "P=".$motriz."<br>".PHP_EOL;
			echo "Q=".$salida."<br>".PHP_EOL;
		}
	}
	elseif ($L==$salida){
		if ($S==$motriz){
			echo "L=".$salida."<br>".PHP_EOL;
			echo "S=".$motriz."<br>".PHP_EOL;
			$P=$conector;
			$Q=$salida;
			echo "P=".$conector."<br>".PHP_EOL;
			echo "Q=".$salida."<br>".PHP_EOL;
		}
		elseif ($S==$tierra){
			echo "L=".$salida."<br>".PHP_EOL;
			echo "S=".$tierra."<br>".PHP_EOL;
			$P=$conector;
			$Q=$motriz;
			echo "P=".$conector."<br>".PHP_EOL;
			echo "Q=".$motriz."<br>".PHP_EOL;
		}
		elseif ($S==$conector){
			echo "L=".$salida."<br>".PHP_EOL;
			echo "S=".$conector."<br>".PHP_EOL;
			$P=$tierra;
			$Q=$motriz;
			echo "P=".$tierra."<br>".PHP_EOL;
			echo "Q=".$motriz."<br>".PHP_EOL;
		}
	}

	$X=$L+$S;
	$Y=$P+$Q;

	#echo $X;
	#echo $Y;

	if ($X<$Y){
		if ($S==$tierra){
			echo "<h1>Rotatorio-Rotatorio</h1>";
		}
		elseif ($S==$conector){
			echo "<h1>Oscilatorio-Oscilatorio</h1>";
		}
		elseif ($S==$motriz){
			echo "<h1>Rotatorio-Oscilatorio</h1>";
		}
		elseif ($S==$salida){
			echo "<h1>Rotatorio-Oscilatorio</h1>";
		}

	}
	elseif ($X>$Y){
		echo "<h1>Oscilatorio-Oscilatorio</h1>";

	}
	elseif ($X==$Y){
		if ($S==$tierra){
			echo "<h1>Rotatorio-Rotatorio (Con puntos muertos)</h1>";
		}
		elseif ($S==$conector){
			echo "<h1>Oscilatorio-Oscilatorio (Con puntos muertos)</h1>";
		}
		elseif ($S==$motriz){
			echo "<h1>Rotatorio-Oscilatorio (Con puntos muertos)</h1>";
		}
		elseif ($S==$salida){
			echo "<h1>Rotatorio-Oscilatorio (Con puntos muertos)</h1>";
		}
	}
}

?>
