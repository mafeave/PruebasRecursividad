<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Video 4</title>
		
	</head>

	<body>

		<?php

			echo "Este es el primer mensaje <br>";
			
			/*incluir archivos externos: include o require
			con required se ejecuta el programa hasta que encuentre un error
			con include se ejecuta todo
			*/
			include("proporciona_datos.php");
			//require("proporciona_datos.php");

			dameDatos();

			echo "Este es el segundo mensaje <br>";

			
		?>
	</body>

</html>