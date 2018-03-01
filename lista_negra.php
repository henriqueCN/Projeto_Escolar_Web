<!DOCTYPE html>
 
<html>
 <head>
 <title> Lista Negra </title>
 <meta name="description" content="Aprenda a criar um site completo que usa formulários em HTML">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 
 </head>

 <body background="fundobac1.jpg">
  <center><h1> lista Negra </h1> </center>
  

<form action="Work_now_Cadastro.php" method="post">

<!-- DADOS PESSOAIS-->
<fieldset>
 <legend>Dados</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label font= "blue" for="nome">Nome: </label>
   </td>
   <td align="left">
    <input type="text" id="nome"name="nome">
   </td>
   <tr>
   <td>
    <label for="telefone">Telefone: </label>
   </td>
   <td align="left">
    <input type="text" id="telefone" name="telefone">
   </td>
  </tr>
  </tr>
  <tr>
   <td>
    <label>Nascimento: </label>
   </td>
   <td align="left">
   <input type="date" id="data_nasc" name="data_nasc" >
   </td>
  </tr>
  <tr>
   <td>
    <label for="categoria">Categoria de Trabalho: </label>
   </td>
   <td align="left">
    <input type="text" id="categoria_trabalho" name="categoria_trabalho">
   </td>
  </tr>
  <tr>
   <td>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" id="cpf" name="cpf">
   </td>
  </tr>
  <tr>
   <td>
    <label for="descricao">  Descrição: </label>
   </td>
   <td align="left">
    <input type="text" id="descricao" name="descricao">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pontuacao"> Pontuação: </label>
   </td>
   <td align="left">
    <input type="text" id="pontuacao" name="pontuacao">
   </td>
  </tr>
 </table>
<br />
</fieldset>
<br />
<!-- DADOS DE LOGIN -->
<fieldset>
 <legend>Dados de login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="email" name="email">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="senha">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<input type="submit" value = "Cadastrar" name = "Cadastrar">
<input type="reset" value="Limpar">
</form>
<?php

if(isset($_POST['Cadastrar']))
{

    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $data = $_POST['data_nasc'];
	$categoria = $_POST['categoria_trabalho'];
	$cpf = $_POST['cpf'];
	$descricao = $_POST['descricao'];
    $email = $_POST['email'];
	$pontuacao = $_POST['pontuacao'];


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
while($row = $result->fetch_assoc())
{
$id = $row['id'];
}
}
else
{
	$id = "";
}



if ($id != ""){
	
	
	
$sql = "UPDATE tbl_trabalhadores SET nome = '".$nome.
											"', email ='".$email.
											"',telefone ='".$telefone.
											"', categoria_trabalho='".$categoria.
											"', cpf='".$cpf.
											"',data_nasc='".$data.
											"', descricao = '".$descricao.
											"',pontuacao = '".$pontuacao.
											"',senha = '".$senha.
											"'WHERE id= ".$id.";";
if ($conn->query($sql) === TRUE) {
    echo "Arquivo stualizado!!!";
}
else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();	
}
else{
	
$sql = "INSERT INTO tbl_trabalhadores VALUES (null ,'".$nome.
													"','".$email.
													"','".$telefone.
													"','".$categoria.
													"','".$cpf.
													"','".$data.
													"','".$descricao.
													"','".$pontuacao.
													"','".$senha."');";
											

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

header("Location: tela_login.php");
}
?>

  
</div>

</body>
</html>
