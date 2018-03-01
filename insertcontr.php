<?php
if(isset($_POST['enviar']))
{
	$now = new DateTime();
    $telefone = $_POST['telefone'];
    $senha = md5($_POST['senha']);
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
	$cpf = $_POST['cpf'];
    $email = $_POST['email'];
	$regiao = $_POST['regiao'];
	$neg_fechados = '0';
	$pontuacao = "";
	$data_criacao = $now->format('Y-m-d H:i:s');



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work_now";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//Verificando existencia do usuario
$result = $conn->query("SELECT * FROM tbl_contratantes WHERE email='".$_POST['email']."';");
if($result->num_rows > 0)
{
echo "usuario já cadastrado";
}
else{
	$sql = "INSERT INTO tbl_contratantes VALUES (null ,'".$nome.
													"','".$regiao.
													"','".$email.
													"','".$telefone.
													"','".$cpf.
													"','".$data_nasc.
													"','".$pontuacao.
													"','".$senha.
													"','".$neg_fechados.
													"','".$data_criacao."');";
											


if ($conn->query($sql) === TRUE) {
	sleep(3);
    echo "ESTÁ FEITO";
    header("location:index.php");
} else {
    echo "Error record: " . $conn->error;
}
}


$conn->close();
}


?>