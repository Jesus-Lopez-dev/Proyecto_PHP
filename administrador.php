<?php
$usuario = "root";
	$servidor = "192.168.1.79";
	$basededatos = "proyectophp";
		
	$conexion = mysqli_connect($servidor, $usuario, "", $basededatos);
		if(!$conexion){
			die("Conexión Fallida" . mysqli_connect_error());
		} 
	mysqli_query($conexion, "SET NAMES 'utf8'");
?>
<HTML>
	<HEAD>
		<TITLE>
			Sistema Administrador
		</TITLE>
	<link rel = "stylesheet" TYPE = "text/css" HREF = "estilos.css" media = "screen">
	</HEAD>

	<BODY>
	<TABLE CELLSPACING = "10">
	<TR>
	<TD><FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Dar de alta nuevo usuario" NAME = "muestratabla">
	</FORM></TD>
	<TD><FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Dar de baja un usuario" NAME = "muestratabla2">
	</FORM></TD>
	<TD><FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Modificar registros" NAME = "muestratabla3">
	</FORM></TD>
	<TD><FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Mostrar registros" NAME = "muestratabla4"">
	</FORM></TD>
	<TD><FORM ACTION = "cierrasesion.php" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Cerrar Sesi&oacute;n">
	</FORM></TD>
	</TR>
	</TABLE>
	<?php
	if(isset($_POST['muestratabla'])){
	?>
	<CENTER>
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<BR><BR><BR><BR>
	<TABLE BORDER = "10" WIDTH = "50%" CELLPADDING = "20">
	<TR ID = "par">
	<TD ALIGN = "CENTER">Registro de nuevo usuario.</TD>
	</TR>
	<TR ID = "impar">
	<TD>Nueva matricula: 
	<INPUT ID = "impar" TYPE = "TEXT" NAME = "nusuario" SIZE = "40" MAXLENGTH = "8" AUTOCOMPLETE = "OFF" REQUIRED > </TD>
	</TR>
	<TR ID = "par">
	<TD>Nueva contrase&ntilde;a: 
	<INPUT ID = "par" TYPE = "TEXT" NAME = "npassword" SIZE = "40" MAXLENGTH = "20" AUTOCOMPLETE = "OFF" REQUIRED > </TD>
	</TR>
	<TR ID = "impar">
	<TD>Tipo de usuario: 
	<SELECT NAME = "ntipousuario" STYLE = "background: transparent; font-size: 20; font-family: Times New Roman; font-style: Italic; height: 25; width: 400px; border: 0px">
	<OPTION VALUE = "Administrador">Administrador</OPTION>
	<OPTION VALUE = "Empleado">Empleado</OPTION>
	</SELECT></TD>
	</TR>
	</TABLE>
	<BR>
	<INPUT TYPE = "SUBMIT" NAME = "ingreso" VALUE = "Ingresar nuevo usuario">
	</FORM>
	</CENTER>
	<?php
	}
	if(isset($_POST['nusuario']) && isset($_POST['npassword']) && isset($_POST['ntipousuario'])){
	$nuevou = $_POST['nusuario'];
	$nuevop = $_POST['npassword'];
	$nuevot = $_POST['ntipousuario'];
	
	$query = mysqli_query($conexion,"INSERT INTO usuario (Matricula,Password,Tipo) VALUES('$nuevou','$nuevop','$nuevot')");
	if(isset($query)){
		echo "<CENTER><H2>Usuario registrado correctamente</H2></CENTER>";
	}
	mysqli_close($conexion);
	}
	
	if(isset($_POST['muestratabla2'])){
	?>
	<CENTER>
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<BR><BR><BR><BR><BR><BR>
	<TABLE BORDER = "10" WIDTH = "50%" CELLPADDING = "20">
	<TR ID = "par">
	<TD ALIGN = "CENTER">Eliminaci&oacute;n de usuario registrado.</TD>
	</TR>
	<TR ID = "impar">
	<TD>Matricula del usuario a dar de baja: 
	<INPUT ID = "impar" TYPE = "TEXT" NAME = "usuarioe" SIZE = "26" MAXLENGTH = "8" AUTOCOMPLETE = "OFF" REQUIRED > </TD>
	</TR>
	</TABLE>
	<BR>
	<INPUT TYPE = "SUBMIT" NAME = "elimina" VALUE = "Dar de baja">
	</FORM>
	</CENTER>
	<?php
	}
	if(isset($_POST['usuarioe'])){
	$eliminado = $_POST['usuarioe'];
	
	$query = mysqli_query($conexion,"DELETE FROM usuario WHERE Matricula = '$eliminado'");
	if(isset($query)){
		echo "<CENTER><H2>Usuario dado de baja</H2></CENTER>";
	}
	mysqli_close($conexion);
	}

	if(isset($_POST['muestratabla3'])){
	?>

	<BR><BR>
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Datos del paciente" NAME = "dp">
	</FORM>
	<BR><BR>
	</TD>
	<TD>
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Usuario registrado" NAME = "ur">
	</FORM>

	<?php
	}
	
	if(isset($_POST['ur'])){
	?>
	<CENTER>
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<TABLE BORDER = "10" WIDTH = "50%" CELLPADDING = "20">
	<TR ID = "par">
	<TD ALIGN = "CENTER">Modificaci&oacute;n de registro de usuario.</TD>
	</TR>
	<TR ID = "impar">
	<TD>Matricula del usuario a modificar: 
	<INPUT ID = "impar" TYPE = "TEXT" NAME = "usuariom" SIZE = "25" MAXLENGTH = "8" AUTOCOMPLETE = "OFF" REQUIRED > </TD>
	</TR>
	<TR ID = "par">
	<TD>&#191;Qu&eacute; se modificara? 
	<SELECT NAME = "modifica" STYLE = "background: transparent; font-size: 20; font-family: Times New Roman; font-style: Italic; height: 25; width: 400px; border: 0px">
	<OPTION VALUE = "Matricula">Matricula</OPTION>
	<OPTION VALUE = "Password">Contrase&ntilde;a</OPTION>
	<OPTION VALUE = "Tipo">Tipo de usuario</OPTION>
	</SELECT></TD>
	</TR>
	<TR ID = "impar">
	<TD>Nuevo dato: 
	<INPUT AUTOCOMPLETE = "OFF" ID = "impar" LIST = "tipos" NAME = "datom" SIZE = "45" MAXLENGTH = "20" PLACEHOLDER = "Elige una opci&oacute;n o introduce el nuevo dato" REQUIRED > 
	<DATALIST ID = "tipos">
	<OPTION>Administrador</OPTION>
	<OPTION>Empleado</OPTION>
	</DATALIST></TD>
	</TR>
	</TABLE>
	<BR>
	<INPUT TYPE = "SUBMIT" NAME = "modificar" VALUE = "Modificar usuario">
	</FORM>
	</CENTER>
	<?php
	}

	if(isset($_POST['usuariom']) && isset($_POST['modifica']) && isset($_POST['datom'])){
	$usuariomodificar = $_POST['usuariom'];
	$quemodifico = $_POST['modifica'];
	$nuevodato = $_POST['datom'];
	
	$query = mysqli_query($conexion,"UPDATE usuario SET $quemodifico = '$nuevodato' WHERE Matricula = $usuariomodificar");
	if(isset($query)){
		echo "<CENTER><H2>Modificaci&oacute;n realizada correctamente</H2></CENTER>";
	}
	mysqli_close($conexion);
	}

	if(isset($_POST['dp'])){
	?>
	<CENTER>
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<TABLE BORDER = "10" WIDTH = "50%" CELLPADDING = "20">
	<TR ID = "par">
	<TD ALIGN = "CENTER">Modificaci&oacute;n de datos del paciente</TD>
	</TR>
	<TR ID = "impar">
	<TD>ID del paciente a modificar: 
	<INPUT ID = "impar" TYPE = "TEXT" NAME = "idpaciente" SIZE = "25" MAXLENGTH = "8" AUTOCOMPLETE = "OFF" REQUIRED > </TD>
	</TR>
	<TR ID = "par">
	<TD>&#191;Qu&eacute; se modificara? 
	<SELECT NAME = "modificapersonales" STYLE = "background: transparent; font-size: 20; font-family: Times New Roman; font-style: Italic; height: 25; width: 400px; border: 0px">
	<OPTION VALUE = "Nombre">Nombre paciente</OPTION>
	<OPTION VALUE = "Genero">Genero</OPTION>
	<OPTION VALUE = "Edad">Edad</OPTION>
	<OPTION VALUE = "Ocupacion">Ocupaci&oacute;n</OPTION>
	<OPTION VALUE = "Lateralidad">Lateralidad</OPTION>
	<OPTION VALUE = "Nacionalidad">Nacionalidad</OPTION>
	<OPTION VALUE = "Religion">Religion</OPTION>
	<OPTION VALUE = "Telefono">Tel&eacute;fono</OPTION>
	<OPTION VALUE = "Domicilio">Domicilio</OPTION>
	<OPTION VALUE = "TelEmergencia">Tel&eacute;fono de emergencia</OPTION>
	<OPTION VALUE = "PersonaContactar">Persona a quien contactar</OPTION>
	</SELECT></TD>
	</TR>
	<TR ID = "impar">
	<TD>Nuevo dato: 
	<INPUT AUTOCOMPLETE = "OFF" ID = "impar" LIST = "varios" NAME = "nuevodato" SIZE = "45" MAXLENGTH = "20" PLACEHOLDER = "Elige una opci&oacute;n o introduce el nuevo dato" REQUIRED > 
	<DATALIST ID = "varios">
	<OPTION>Hombre</OPTION>
	<OPTION>Mujer</OPTION>
	<OPTION>Diestro</OPTION>
	<OPTION>Zurdo</OPTION>
	<OPTION>Ambidiestro</OPTION>
	</DATALIST></TD>
	</TR>
	</TABLE>
	<BR>
	<INPUT TYPE = "SUBMIT" NAME = "modificarpaciente" VALUE = "Modificar paciente">
	</FORM>
	</CENTER>
	
	<?php
	}
	
	if(isset($_POST['idpaciente']) && isset($_POST['modificapersonales']) && isset($_POST['nuevodato'])){
	$pacientem = $_POST['idpaciente'];
	$semodifica = $_POST['modificapersonales'];
	$nuevodatop = $_POST['nuevodato'];
	
	$query = mysqli_query($conexion,"UPDATE datos_generales SET $semodifica = '$nuevodatop' WHERE Id = $pacientem");
	if(isset($query)){
		echo "<CENTER><H2>Modificaci&oacute;n realizada correctamente</H2></CENTER>";
	}
	mysqli_close($conexion);
	}
	
	if(isset($_POST['muestratabla4'])){
	?>
	<CENTER>
	<BR><BR><BR><BR><BR><BR>
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Ver datos generales de los pacientes" NAME = "dghc">
	</FORM>
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Ver enfermedades de los pacientes" NAME = "ep">
	</FORM>
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Ver catalogo de enfermedades" NAME = "ce">
	</FORM>
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<INPUT TYPE = "SUBMIT" VALUE = "Ver usuarios" NAME = "u">
	</FORM>
	</CENTER>
	<?php
	}
	
	if(isset($_POST['dghc'])){
	?>
	<BR><BR><BR><BR><BR><BR><BR><BR>
	<TABLE BORDER = "10" CELLPADDING = "5">
	<TR STYLE = "font-family: Times New roman;font-style: italic; font-size: 14; border-color: #ADD8E6; background-color:  #B0E0E6; ">
	<TH>ID</TH>
	<TH>Nombre</TH>
	<TH>Fecha de elaboraci&oacute;n</TH>
	<TH >Genero</TH>
	<TH>Edad</TH>
	<TH>Fecha de nacimiento</TH>
	<TH>Ocupaci&oacute;n</TH>
	<TH>Lateralidad</TH>
	<TH>Nacionalidad</TH>
	<TH>Religi&oacute;n</TH>
	<TH>Telefono</TH>
	<TH>Domicilio</TH>
	<TH>Telefono de emergencia</TH>
	<TH>Persona a quien contactar</TH>
	</TR>
	<?php
	$query = mysqli_query($conexion,"SELECT * FROM datos_generales");
		while($mostrar = mysqli_fetch_array($query)){
	?>
	<TR STYLE = "font-family: Times New roman;font-style: italic; font-size: 14; border-color: #ADD8E6; background-color:	#F5F5F5;">
	<TD ALIGN = "CENTER"><?php echo $mostrar['Id'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Nombre'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['FechaEla'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Genero'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Edad'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['FechaNac'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Ocupacion'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Lateralidad'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Nacionalidad'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Religion'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Telefono'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Domicilio'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['TelEmergencia'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['PersonaContactar'] ?></TD>
	</TR>
	<?php
		}
	?>	
	</TABLE>
	<?php
	}
	
	if(isset($_POST['ep'])){
	?>
	<BR><BR><BR><BR><BR><BR><BR><BR>
	<CENTER>
	<TABLE BORDER = "10" WIDTH = "70%" CELLPADDING = "5">
	<TR STYLE = "font-family: Times New roman;font-style: italic; font-size: 14; border-color: #ADD8E6; background-color:  #B0E0E6; ">
	<TH>ID</TH>
	<TH>Nombre</TH>
	<TH>Enfermedad</TH>
	<TH >Parentesco</TH>
	<TH>Genero del pariente</TH>
	</TR>
	<?php
	$query = mysqli_query($conexion,"SELECT * FROM enfermedades_paciente");
		while($mostrar = mysqli_fetch_array($query)){
	?>
	<TR STYLE = "font-family: Times New roman;font-style: italic; font-size: 14; border-color: #ADD8E6; background-color:	#F5F5F5;">
	<TD ALIGN = "CENTER"><?php echo $mostrar['Id'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Nombre'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Enfermedad'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Parentesco'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Genero_pariente'] ?></TD>
	</TR>
	<?php
		}
	?>	
	</TABLE>
	</CENTER>
	<?php
	}
	
	if(isset($_POST['ce'])){
	?>
	<BR>
	<CENTER>
	<TABLE BORDER = "10" WIDTH = "50%" CELLPADDING = "5">
	<TR STYLE = "font-family: Times New roman;font-style: italic; font-size: 14; border-color: #ADD8E6; background-color:  #B0E0E6; ">
	<TH>ID</TH>
	<TH>Enfermedad</TH>
	</TR>
	<?php
	$query = mysqli_query($conexion,"SELECT * FROM tipo_enfermedad");
		while($mostrar = mysqli_fetch_array($query)){
	?>
	<TR STYLE = "font-family: Times New roman;font-style: italic; font-size: 14; border-color: #ADD8E6; background-color:	#F5F5F5;">
	<TD ALIGN = "CENTER"><?php echo $mostrar['Id'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Nombre'] ?></TD>
	</TR>
	<?php
		}
	?>	
	</TABLE>
	<CENTER>
	<?php
	}

	if(isset($_POST['u'])){
	?>
	<BR><BR><BR><BR><BR><BR><BR>
	<CENTER>
	<TABLE BORDER = "10" WIDTH = "60%" CELLPADDING = "5">
	<TR STYLE = "font-family: Times New roman;font-style: italic; font-size: 14; border-color: #ADD8E6; background-color:  #B0E0E6; ">
	<TH>Matricula</TH>
	<TH>Contrase&ntilde;a</TH>
	<TH >Tipo de usuario</TH>
	</TR>
	<?php
	$query = mysqli_query($conexion,"SELECT * FROM usuario");
		while($mostrar = mysqli_fetch_array($query)){
	?>
	<TR STYLE = "font-family: Times New roman;font-style: italic; font-size: 14; border-color: #ADD8E6; background-color:	#F5F5F5;">
	<TD ALIGN = "CENTER"><?php echo $mostrar['Matricula'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Password'] ?></TD>
	<TD ALIGN = "CENTER"><?php echo $mostrar['Tipo'] ?></TD>
	</TR>
	<?php
		}
	?>	
	</TABLE>
	</CENTER>
	<?php
	}
	?>
	</BODY>
</HTML>