<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work_now";
$conn = mysqli_connect($servername, $username, $password, $dbname);
   
     $mail = $_POST["email"]; //pega os dados do formulario e grava em $numero
	 $pass = $_POST["senha"];
     $_SESSION['mail'] = $mail; //gravo uma sessao com o nome de numero e com valor de $numero
	 $_SESSION['pass'] = $pass;

$result = $conn->query("SELECT * FROM tbl_trabalhadores WHERE email='".$_POST['email']."'AND senha='".md5($_POST['senha'])."';");
if($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
$email = $row['email'];
$senha = $row['senha'];
$id = $row['id'];
if($email == $_POST['email'] && $senha == md5($_POST ['senha']))
	header("Location: tela_trabalhador.php");
}
}
else if($result->num_rows == 0)
{
$result = $conn->query("SELECT * FROM tbl_admin WHERE email='".$_POST['email']."'AND senha='".md5($_POST['senha'])."';");
if($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
$email = $row['email'];
$senha = $row['senha'];
if($email == $_POST['email'] && $senha == md5($_POST ['senha']))
	header("Location: tela_admin.php");
}
}
else if($result->num_rows == 0)
{
$result = $conn->query("SELECT * FROM tbl_contratantes WHERE email='".$_POST['email']."'AND senha='".md5($_POST['senha'])."';");
if($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
$email = $row['email'];
$senha = $row['senha'];
if($email == $_POST['email'] && $senha == md5($_POST ['senha']))
	header("Location: tela_contratante.php");
}
}
elseif($result->num_rows == 0){
echo "login inválido";
}
}

}




?>