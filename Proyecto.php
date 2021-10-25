<?php
$fecha = date('Y-m-d'/*,strtotime('-1 day')*/);
?>

<HTML>
	<HEAD>
		<TITLE>
			Evaluacion PHP
		</TITLE>
	<link rel = "stylesheet" TYPE = "text/css" HREF = "estilos.css" media = "screen">
	</HEAD>
	<BODY>

	<CENTER>
	<BR><BR><BR><BR>
	<H1>Historia Cl&iacute;nica</H1>
	<BR><BR><BR>
	<FORM METHOD= "POST" ACTION = "conexion.php">
	<TABLE BORDER = "10" WIDTH = "90%" CELLPADDING = "5">
	
	<TR ID = "par">
	<TD COLSPAN = "3" ALIGN = "CENTER">Ficha de identificaci&oacute;n </TD>
	</TR>
	
	<TR ID = "impar">
	<TD COLSPAN = "3">Fecha de elaboraci&oacute;n: 
	<INPUT ID = "impar" TYPE = "DATE" NAME = "fechaela" VALUE = "<?php echo $fecha; ?>" READONLY>  </TD>
	</TR>

	<TR ID = "par">
	<TD WIDTH = "40%">Nombre: 
	<INPUT ID = "par" TYPE = "TEXT" NAME = "nombre" SIZE = "30" MAXLENGTH = "50" REQUIRED > </TD>
	<TD>G&eacute;nero: 
	<INPUT  ID = "par" TYPE = "RADIO" NAME = "genero" VALUE = "Hombre" REQUIRED>Hombre
	 <INPUT  ID = "par" TYPE = "RADIO" NAME = "genero" VALUE = "Mujer" REQUIRED>Mujer </TD>
	<TD>Edad: 
	<INPUT ID = "anchoedad" TYPE = "NUMBER" NAME = "edad" MIN = "0" MAX = "99" REQUIRED> </TD>
	</TR>
	
	<TR ID = "impar">
	<TD>Fecha de nacimiento: 
	<INPUT ID = "anchofecha" TYPE = "DATE" NAME = "fecha" REQUIRED> </TD>
	<TD WIDTH = "30%">Ocupaci&oacute;n: 
	<INPUT ID = "impar" TYPE = "TEXT" NAME = "ocupacion" SIZE = "15" MAXLENGTH = "30" REQUIRED> </TD>
	<TD>Lateralidad: 
	<SELECT NAME = "lateralidad" STYLE = "background: transparent; font-size: 20; font-family: Times New Roman; font-style: Italic; height: 25; width: 200px; border: 0px">
	<OPTION VALUE = "Diestro">Diestro</OPTION>
	<OPTION VALUE = "Zurdo">Zurdo</OPTION>
	<OPTION VALUE = "Ambidiestro">Ambidiestro</OPTION>
	</SELECT></TD>
	</TR>

	<TR ID = "par">
	<TD>Nacionalidad: 
	<INPUT ID = "par" TYPE = "TEXT" NAME = "nacionalidad" SIZE = "25" MAXLENGTH = "30"REQUIRED > </TD>
	<TD>Religi&oacute;n:
	 <SELECT NAME = "religion" STYLE = "background: transparent; font-size: 20; font-family: Times New Roman; font-style: Italic; height: 25; width: 220px; border: 0px">
	<OPTION VALUE = "Ateo">Ateo</OPTION>
	<OPTION VALUE = "Cat&oacute;lico">Cat&oacute;lico</OPTION>
	<OPTION VALUE = "Cristiana">Cristiana</OPTION>
	<OPTION VALUE = "Jud&iacute;o">Jud&iacute;o</OPTION>
	<OPTION VALUE = "Mormon">Mormon</OPTION>
	<OPTION VALUE = "Testigo de Jehov&aacute;">Testigo de Jehov&aacute;</OPTION>
	<OPTION VALUE = "Otra">Otra</OPTION>
	</SELECT></TD>
	<TD>Tel&eacute;fono: 
	<INPUT ID = "par" MAXLENGTH = "10" TYPE = "TEL" NAME = "telefono" SIZE = "20" REQUIRED></TD>
	</TR>

	<TR ID = "impar">
	<TD>Domicilio: 
	<INPUT  ID = "impar" TYPE = "TEXT" NAME = "domicilio" SIZE = "30" MAXLENGTH = "50" REQUIRED> </TD>
	<TD COLSPAN = "2">Tel&eacute;fono de emergencia: 
	<INPUT ID = "impar" MAXLENGTH = "10" TYPE = "TEL" NAME = "telefonoemergencia" SIZE = "40" REQUIRED></TD> </TD>
	</TR>

	<TR ID = "par">
	<TD COLSPAN = "3">Persona quien contactar en caso de emergencia: 
	<INPUT ID = "par" TYPE = "TEXT" NAME = "personaemergencia" SIZE = "65" MAXLENGTH = "50" REQUIRED ></TD>
	</TR>
	
	</TABLE>
	<BR><BR><BR><BR>

	<TABLE BORDER = "10" WIDTH = "90%" CELLPADDING = "5">
	
	<TR ID = "par">
	<TD ALIGN = "CENTER" COLSPAN = "6"> Antecedentes heredo-familiares</TD>
	</TR>
	
	<TR ID = "impar">
	<TH ID = "ancho" ></TH>
	<TH>Si</TH>
	<TH>No</TH>
	<TH ID = "ancho">Parentesco</TH>
	<TH>V</TH>
	<TH>M</TH>
	</TR>

	<TR ID = "par">
	<TD>1.- Neoplasias</TD>
	<TD>
	<INPUT TYPE = "RADIO" NAME = "Neoplasias" VALUE = "Si" REQUIRED></TD>
	<TD>
	<INPUT TYPE = "RADIO" NAME = "Neoplasias" VALUE = "No" REQUIRED></TD>
	<TD><INPUT ID = "par" TYPE = "TEXT" NAME = "parentesco1" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v1" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v1" VALUE = "M"></TD>
	</TR>

	<TR ID = "impar">
	<TD>2.- Tuberculosis</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Tuberculosis" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Tuberculosis" VALUE = "No" REQUIRED></TD>
	<TD><INPUT  ID = "impar" TYPE = "TEXT" NAME = "parentesco2" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v2" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v2" VALUE = "M"></TD>
	</TR>

	<TR ID = "par">
	<TD>3.- Diabetes</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Diabetes" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Diabetes" VALUE = "No" REQUIRED></TD>
	<TD><INPUT ID = "par" TYPE = "TEXT" NAME = "parentesco3" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v3" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v3" VALUE = "M"></TD>
	</TR>

	<TR ID = "impar">
	<TD>4.- Artritis</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Artritis" VALUE = "si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Artritis" VALUE = "no" REQUIRED></TD>
	<TD><INPUT  ID = "impar" TYPE = "TEXT" NAME = "parentesco4" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v4" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v4" VALUE = "M"></TD>
	</TR>

	<TR ID = "par">
	<TD>5.- Cardiopat&iacute;as</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Cardiopatias" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Cardiopatias" VALUE = "No" REQUIRED></TD>
	<TD><INPUT ID = "par" TYPE = "TEXT" NAME = "parentesco5" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v5" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v5" VALUE = "M"></TD>
	</TR>

	<TR ID = "impar">
	<TD>6.- Enfermedades neurol&oacute;gicas</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Enfermedades_neurologicas" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Enfermedades_neurologicas" VALUE = "No" REQUIRED></TD>
	<TD><INPUT  ID = "impar" TYPE = "TEXT" NAME = "parentesco6" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v6" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v6" VALUE = "M"></TD>
	</TR>

	<TR ID = "par">
	<TD>7.- Trastornos psiqui&aacute;tricos</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Trastornos_psiquiatricos" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Trastornos_psiquiatricos" VALUE = "No" REQUIRED></TD>
	<TD><INPUT ID = "par" TYPE = "TEXT" NAME = "parentesco7" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v7" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v7" VALUE = "M"></TD>
	</TR>

	<TR ID = "impar">
	<TD>8.- Enfermedades respiratorias</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Enfermedades_respiratorias" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Enfermedades_respiratorias" VALUE = "No" REQUIRED></TD>
	<TD><INPUT  ID = "impar" TYPE = "TEXT" NAME = "parentesco8" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v8" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v8" VALUE = "M"></TD>
	</TR>

	<TR ID = "par">
	<TD>9.- Hepatopat&iacute;as</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Hepatopatias" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Hepatopatias" VALUE = "No" REQUIRED></TD>
	<TD><INPUT ID = "par" TYPE = "TEXT" NAME = "parentesco9" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v9" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v9" VALUE = "M"></TD>
	</TR>

	<TR ID = "impar">
	<TD>10.- Alergias</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Alergias" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Alergias" VALUE = "No" REQUIRED></TD>
	<TD><INPUT  ID = "impar" TYPE = "TEXT" NAME = "parentesco10" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v10" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v10" VALUE = "M"></TD>
	</TR>

	<TR ID = "par">
	<TD>11.- Hipertensi&oacute;n</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Hipertension" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Hipertension" VALUE = "No" REQUIRED></TD>
	<TD><INPUT ID = "par" TYPE = "TEXT" NAME = "parentesco11" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v11" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v11" VALUE = "M"></TD>
	</TR>

	<TR ID = "impar">
	<TD>12.- Enfermedades hematol&oacute;gicas</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Enfermedades_hematologicas" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Enfermedades_hematologicas" VALUE = "No" REQUIRED></TD>
	<TD><INPUT  ID = "impar" TYPE = "TEXT" NAME = "parentesco12" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v12" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v12" VALUE = "M"></TD>
	</TR>

	<TR ID = "par">
	<TD>13.- Enfermedades endocrinol&oacute;gicas</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Enfermedades_endocrinologicas" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Enfermedades_endocrinologicas" VALUE = "No" REQUIRED></TD>
	<TD><INPUT ID = "par" TYPE = "TEXT" NAME = "parentesco13" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v13" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v13" VALUE = "M"></TD>
	</TR>

	<TR ID = "impar">
	<TD>14.- Enfermedades gen&eacute;ticas</TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Enfermedades_geneticas" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Enfermedades_geneticas" VALUE = "No" REQUIRED></TD>
	<TD><INPUT  ID = "impar" TYPE = "TEXT" NAME = "parentesco14" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v14" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v14" VALUE = "M"></TD>
	</TR>

	<TR ID = "par">
	<TD>Otros: </TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Otros" VALUE = "Si" REQUIRED></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "Otros" VALUE = "No" REQUIRED></TD>
	<TD><INPUT ID = "par" TYPE = "TEXT" NAME = "parentesco15" SIZE = "40" MAXLENGTH = "30"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v15" VALUE = "V"></TD>
	<TD><INPUT TYPE = "RADIO" NAME = "v15" VALUE = "M"></TD>
	</TR>	
	</TABLE>	
	<BR><BR>
	<INPUT TYPE = "SUBMIT" NAME = "envio" VALUE = "Enviar historia cl&iacute;nica">
	</FORM>	
	</CENTER>
	<FORM ACTION = "http://localhost:8085/historial_clinico/registro.php">
	<DIV STYLE  = "text-align: right;">
	<INPUT TYPE = "SUBMIT" VALUE = "Registrate">
	</DIV>
	</FORM>
	
	</BODY>
</HTML>