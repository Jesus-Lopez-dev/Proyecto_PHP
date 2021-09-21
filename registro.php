<HTML>
	<HEAD>
		<TITLE>
			Registrate
		</TITLE>
	<link rel = "stylesheet" TYPE = "text/css" HREF = "estilos.css" media = "screen">
	</HEAD>
	<BODY>
	<CENTER>
	<BR><BR><BR><BR>
	<H1>Bienvenido</H1>
	<BR><BR><BR>
	
	<FORM ACTION = "<?php echo $_SERVER['PHP_SELF'] ?>" METHOD = "POST">
	<TABLE BORDER = "10" WIDTH = "40%" CELLPADDING = "20">
	<TR ID = "par">
	<TD ALIGN = "CENTER">Inicio de sesi&oacute;n</TD>
	</TR>

	<TR ID = "impar">
	<TD>Usuario: 
	<INPUT ID = "impar" TYPE = "TEXT" NAME = "usuario" SIZE = "30" MAXLENGTH = "8" AUTOCOMPLETE = "OFF" REQUIRED > </TD>
	</TR>
	
	<TR ID = "par">
	<TD>Contrase&ntilde;a: 
	<INPUT ID = "par" TYPE = "PASSWORD" NAME = "contrasena" SIZE = "30" MAXLENGTH = "20" REQUIRED > </TD>
	</TR>
	<TABLE>
	<BR><BR>
	<INPUT TYPE = "SUBMIT" NAME = "envio" VALUE = "Iniciar Sesi&oacute;n" ID = "registro">
	</FORM>
	</CENTER>
	
	<FORM ACTION = "Proyecto.php">
	<DIV STYLE  = "text-align: right;">
	<BR><BR>
	<INPUT TYPE = "SUBMIT" VALUE = "Volver">
	</DIV>
	</FORM>

	<?php
	session_start();

	if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
		$usu = $_POST['usuario'];
		$pass = $_POST['contrasena'];
		$usuario = "root";
		$servidor = "192.168.1.79";
		$basededatos = "proyectophp";

		$conexion = mysqli_connect($servidor, $usuario, "", $basededatos);
		if(!$conexion){
			die("Conexión Fallida" . mysqli_connect_error());
		} 
		mysqli_query($conexion, "SET NAMES 'utf8'");

		$query = "SELECT * FROM usuario WHERE Matricula = '$usu' AND Password = '$pass'";
		$result = mysqli_query($conexion, $query);
		if(!$result){
			echo "Algo va mal";
		}
		while($row = mysqli_fetch_assoc($result)){
			$matricula = $row['Matricula'];
			$password = $row['Password'];
			$tipo = $row['Tipo'];
		}
		$count = mysqli_num_rows($result);
		if($count == 1){
			$_SESSION['Matricula']= $matricula;
			$_SESSION['Password']= $password;
			$_SESSION['Tipo']= $tipo;
			switch($tipo){
				case 'Administrador':
					header("location: administrador.php");
					break;
				case 'Empleado':
					header("location: empleado.php");
					break;
			}
		} else if($count == 0){
			echo "<CENTER> <P STYLE = 'color: red; font-family: Times New roman; font-style: italic; font-size: 32;'>
			Usuario y/o contrase&ntilde;a incorrecta</P></CENTER>";
		}
	}
	?>
	
	</BODY>
</HTML>