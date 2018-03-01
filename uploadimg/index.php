<html>
<head>
</head>

<body>


	<form method = "post" action = "index.php" enctype = "multiport/form-data">
		<input type = "text" nome = "email"><br>
		<br>
		<input type = "file" nome = "arquivo"><br>
		<br>
		<input type = "submit" nome = "enviar" value = "enviar arquivo">

	</form>
	<?php
if(isset($_POST['enviar'])){
	echo $_POST['email'];

}


	?>
</body>

</html>