<?php

	echo "Nombre" .$_POST["texto"]."<br>";
	echo "radio:" .$_POST["correo"]."<br>";

	if(isset($_POST["opcion"]))
	{	
		$i = 1;
		foreach($_POST["opcion"] as $op)
		{
			echo "opcion: ".$i.": ".$op."<br>";
			$i++;
		}
	}
	else 
	{
        echo "No se seleccionó ninguna opción.";
    }
	echo "aceptar:" .$_POST["aceptar"]."<br>";
?>