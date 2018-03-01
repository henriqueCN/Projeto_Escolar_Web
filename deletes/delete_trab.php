<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php include('header.php') ?>

<body>
	<div class = "col-md-4">
	</div>
	<div style = "margin-top:100px"class = "col-md-4">

<form action = "delete_trab.php" method = "post">
<h4>Após a exclusão, não é possível recuperar seu login, caso esteja decidido a excluir, digite seu cpf</h4>
<center><input type = "text" name = "cpf"></center><br>
<center><input type = "submit" class = "btn btn-danger" value = "Excluir" name = "Excluir"></center>

</form>
</div>
</body>
</html>

<?php
if(isset($_POST['Excluir']))
{
$cpf = $_POST['cpf'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work_now";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM tbl_trabalhadores WHERE cpf='".$cpf."'";

if ($conn->query($sql) === TRUE) {
    header("location:index.php");
} else {
    echo "Erro ao deletar" . $conn->error;
}

$conn->close();
}
?>