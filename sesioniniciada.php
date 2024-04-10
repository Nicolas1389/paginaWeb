<?php
	$error;
	if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
		$usuario = $_POST['usuario'];
		$contraseña = $_POST['contraseña'];
		if($usuario == "subgrupo5" && $contraseña == "1234@"){
			$error = "ok";
			echo "accedio";
			header("location: paginainicio.html");
		}else{
			$error="incorrecto";
			header("location: login.php?error=$error");
		}
	}else{
		$error="vacio";
		header("location: login.php?error=$error");
	}