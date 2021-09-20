<HTML>

	<HEAD>
		<TITLE>
			Evaluacion PHP
		</TITLE>
	<link rel = "stylesheet" TYPE = "text/css" HREF = "estilos.css" media = "screen">
	<META HTTP-EQUIV = "REFRESH" CONTENT = "2;URL = Proyecto.php">
	</HEAD>

	<BODY>
	<?php
	$usuario = "root";
	$servidor = "localhost";
	$basededatos = "proyectophp";

	$conexion = mysqli_connect($servidor, $usuario, "", $basededatos);
	if(!$conexion){
		die("Conexión Fallida" . mysqli_connect_error());
	} 
	mysqli_query($conexion, "SET NAMES 'utf8'");

	$fp = fopen("contador.txt", "r+");
	$contador = fgets($fp, 7);

	if(isset($_POST['nombre']) && $_POST['nombre'] != ""  && $_POST['fechaela'] != "" && $_POST['genero'] != "" && $_POST['edad'] != "" && $_POST['fecha'] != "" && $_POST['ocupacion'] != "" 
		&& $_POST['lateralidad'] != "" && $_POST['nacionalidad'] != "" && $_POST['religion'] != "" && $_POST['telefono'] != "" && $_POST['domicilio'] != "" 
                	&& $_POST['telefonoemergencia'] != "" && $_POST['personaemergencia'] != ""){

		$nombre = $_POST["nombre"];
		$fechaelaboracion = $_POST["fechaela"];
		$genero = $_POST["genero"];
		$edad = $_POST["edad"];
		$fechanacimiento = $_POST["fecha"];
		$ocupacion = $_POST["ocupacion"];
		$lateralidad = $_POST["lateralidad"];
		$nacionalidad = $_POST["nacionalidad"];
		$religion = $_POST["religion"];
		$telefono = $_POST["telefono"];
		$domicilio = $_POST["domicilio"];
		$telemergencia = $_POST["telefonoemergencia"];
		$personacontactar = $_POST["personaemergencia"];

		$query = mysqli_query($conexion, "INSERT INTO datos_generales(Id,Nombre,FechaEla,Genero,Edad,FechaNac,Ocupacion,Lateralidad,
				Nacionalidad,Religion,Telefono,Domicilio,TelEmergencia,PersonaContactar) VALUES ('$contador','$nombre','$fechaelaboracion',
				'$genero','$edad','$fechanacimiento','$ocupacion','$lateralidad','$nacionalidad','$religion','$telefono','$domicilio',
				'$telemergencia','$personacontactar')");
	}

	if (isset($_POST["Neoplasias"]) && $_POST["Neoplasias"] != "" && $_POST["Tuberculosis"] != "" && $_POST["Diabetes"]  != "" && $_POST["Artritis"] != "" 
		&& $_POST["Cardiopatias"] != "" && $_POST["Enfermedades_neurologicas"] != "" && $_POST["Trastornos_psiquiatricos"] != "" 
		&&  $_POST["Enfermedades_respiratorias"] != "" && $_POST["Hepatopatias"] != "" && $_POST["Alergias"] != "" && $_POST["Hipertension"] != "" 
		&& $_POST["Enfermedades_hematologicas"] != "" && $_POST["Enfermedades_endocrinologicas"] != "" && $_POST["Enfermedades_geneticas"] != "" 
		&& $_POST["Otros"] != ""){
		
		$neo = $_POST["Neoplasias"];
		$tub = $_POST["Tuberculosis"];
		$di = $_POST["Diabetes"];
		$ar = $_POST["Artritis"];	
		$car = $_POST["Cardiopatias"];
		$neuro = $_POST["Enfermedades_neurologicas"];
		$psi = $_POST["Trastornos_psiquiatricos"];
		$resp = $_POST["Enfermedades_respiratorias"];
		$hepa = $_POST["Hepatopatias"];
		$aler = $_POST["Alergias"];
		$hiper = $_POST["Hipertension"];
		$hema = $_POST["Enfermedades_hematologicas"];
		$endo = $_POST["Enfermedades_endocrinologicas"];
		$gene = $_POST["Enfermedades_geneticas"];
		$otros = $_POST["Otros"];
	
		if( $neo == 'Si'){
			$parentesco1 = $_POST["parentesco1"];
			$generopariente = $_POST["v1"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco1','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 1)  WHERE Enfermedad = '' ");
		}
		if( $tub == 'Si'){
			$parentesco2 = $_POST["parentesco2"];
			$generopariente = $_POST["v2"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco2','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 2)  WHERE Enfermedad = '' ");
		}
		if( $di == 'Si'){
			$parentesco3 = $_POST["parentesco3"];
			$generopariente = $_POST["v3"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco3','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 3)  WHERE Enfermedad = '' ");
		}
		if( $ar == 'Si'){
			$parentesco4 = $_POST["parentesco4"];
			$generopariente = $_POST["v4"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco4','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 4)  WHERE Enfermedad = '' ");
		}
		if( $car == 'Si'){
			$parentesco5 = $_POST["parentesco5"];
			$generopariente = $_POST["v5"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco5','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 5)  WHERE Enfermedad = '' ");
		}
		if( $neuro == 'Si'){
			$parentesco6 = $_POST["parentesco6"];
			$generopariente = $_POST["v6"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco6','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 6)  WHERE Enfermedad = '' ");
		}
		if( $psi == 'Si'){
			$parentesco7 = $_POST["parentesco7"];
			$generopariente = $_POST["v7"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco7','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 7)  WHERE Enfermedad = '' ");
		}
		if( $resp == 'Si'){
			$parentesco8 = $_POST["parentesco8"];
			$generopariente = $_POST["v8"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco8','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 8)  WHERE Enfermedad = '' ");
		}
		if( $hepa == 'Si'){
			$parentesco9 = $_POST["parentesco9"];
			$generopariente = $_POST["v9"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco9','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 9)  WHERE Enfermedad = '' ");
		}
		if( $aler == 'Si'){
			$parentesco10 = $_POST["parentesco10"];
			$generopariente = $_POST["v10"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco10','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 10)  WHERE Enfermedad = '' ");
		}
		if( $hiper == 'Si'){
			$parentesco11 = $_POST["parentesco11"];
			$generopariente = $_POST["v11"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco11','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 11)  WHERE Enfermedad = '' ");
		}
		if( $hema == 'Si'){
			$parentesco12 = $_POST["parentesco12"];
			$generopariente = $_POST["v12"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco12','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 12)  WHERE Enfermedad = '' ");
		}
		if( $endo == 'Si'){
			$parentesco13 = $_POST["parentesco13"];
			$generopariente = $_POST["v13"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco13','$generopariente')");
			$query2 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 13) WHERE Enfermedad = '' ");
		}
		if( $gene == 'Si'){
			$parentesco14 = $_POST["parentesco14"];
			$generopariente = $_POST["v14"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco14','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 14)  WHERE Enfermedad = '' ");
		}
		
		if( $otros == 'Si'){
			$parentesco15 = $_POST["parentesco15"];
			$generopariente = $_POST["v15"];
			
			$query2 = mysqli_query($conexion, "INSERT INTO enfermedades_paciente(Id,Nombre, Enfermedad, Parentesco,Genero_pariente)
			VALUES ('$contador','$nombre','','$parentesco15','$generopariente')");
			$query3 = mysqli_query($conexion,"UPDATE enfermedades_paciente SET Enfermedad = (SELECT Nombre FROM tipo_enfermedad WHERE Id = 15)  WHERE Enfermedad = '' ");
		}	
	}
	echo $contador; 
	if(isset($_POST['envio'])){
		$contador++;
		rewind($fp);
		fputs($fp, $contador);
		fclose($fp);
		echo "<CENTER><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><H1>Tu formulario ha sido enviado con &eacute;xito </CENTER></H1>";
		mysqli_close($conexion);
	}
	?>
	</BODY>
</HTML>