<?php
if(isset($_POST['enviar']))
{
	$now = new DateTime();

    $telefone = $_POST['telefone'];
    $senha = md5($_POST['senha']);
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
	$categoria = $_POST['categoria'];
	$cpf = $_POST['cpf'];
	$descricao = $_POST['descricao'];
    $email = $_POST['email'];
	$reg_trabalho = $_POST['regiao'];
	$vip = $_POST['vip'];
	$neg_fechados = ""; 
	$pontuacao = "";
	$data_criacao = $now->format('Y-m-d H:i:s');
	$fotos = "default.php";
	$disponibilidade = '1';



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work_now";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//Verificando existencia do usuario
$result = $conn->query("SELECT * FROM tbl_trabalhadores WHERE email='".$_POST['email']."';");
if($result->num_rows > 0)
{
echo "usuario já cadastrado";
}
else{
	$sql = "INSERT INTO tbl_trabalhadores VALUES (null ,'".$nome.
													"','".$email.
													"','".$telefone.
													"','".$categoria.
													"','".$reg_trabalho.
													"','".$vip.
													"','".$cpf.
													"','".$data_nasc.
													"','".$descricao.
													"','".$pontuacao.
													"','".$neg_fechados.
													"','".$senha.
													"','".$data_criacao.
													"','".$fotos.
													"','".$disponibilidade."');";
											


if ($conn->query($sql) === TRUE) {
	sleep(3);
    echo "ESTÁ FEITO";
    header("location:index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
}


$conn->close();
}


?>