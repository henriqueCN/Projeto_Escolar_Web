<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script>
	$(function(){
	$("#email").blur(function (){	
	$.getJSON("webservices/webservice_lista_negra.php?email="+$(this).val(), function(dados){
		$("#mail").val(dados.email);
	    $("#id").val(dados.id);
        $("#nome").val(dados.nome);
        $("#regiao").val(dados.reg_trabalho);
        $("#telefone").val(dados.telefone);
		$("#cpf").val(dados.cpf);
        $("#descricao").val(dados.descricao);
		$("#categoria").val(dados.categoria_trabalho);
		$("#data_nasc").val(dados.data_nasc);
		$("#pontuacao").val(dados.pontuacao);
		$("#neg_fechados").val(dados.neg_fechados);
		$("#vip").val(dados.vip);
		$("#senha").val(dados.senha);
		$("#data_criacao").val(dados.data_criacao);
	});
	});
    });
    </script>

<style>
.form-control{
	width: 400px
}
.divi{
	margin-left:400px;
	width:800px;
	height:1300px;
	Background-color:#006666;
}
.textbox{
	height:50px;
	width:500px;
	border-radius:5px;
	margin-right:80px;
	font-size:20px;
}
b{
	color:#000000;
	font-size:20px;
}
.form-control{
	font-size:20px;
}
#myiequip1
{
  
    border-radius: 50px;
     height: 100px;
    width: 100px; 
  
   
  border-style: solid;
    border-color: #000000 ;


}
#imgsobre
{
  
    border-radius: 50px;
     height: 100px;
    width: 100px; 
  
   
  border-style: solid;
    border-color: #000000 ;


}

#imgbd
{
  
    border-radius: 50px;
     height: 200px;
    width: 200px; 
  
   
  border-style: solid;
    border-color: #000000 ;


}


#myiequip
{
  
    border-radius: 50px;
     
  
    height: 200px;
  border-style: solid;
    border-color: #000000 ;


}
</style>
</head>
<?php include('header.php') ?>

<body style = "margin-top:100px;"background="imagens/fundobac1.jpg">
<div class="row"style=" background="color:#EEEEE0"">

    <center><div class="col-md-12">
    	<input class = "textbox" type = "email" Placeholder = "Digite o email do usuário" id = "email">
    	<button class="btn btn-primary">Pesquisar <i class="fa fa-search "></i></button>
    	<form method = "post" action = "retirar_lista_negra.php">
    	<input  class="btn btn-success" type = "submit" name = "enviar">
         <input class="btn btn-danger" type = "reset">
</div></center>

       <div class="row">
         <center> <div class="col-md-6">
              

              <b>ID</b><input class="form-control" type = "text" name = "id" id = "id" ><br>

              <b>E-mail</b><input class="form-control" type = "email" name = "email" id = "mail" ><br>

              <b>Nome</b><input class="form-control" type = "text" name = "nome" id = "nome" ><br>

             <b>Senha</b><input class="form-control" type = "password" name = "senha" id = "senha" ><br>
  
             <b>Regiao</b><input class="form-control" type = "text" name = "regiao" id = "regiao" ><br>

             <b>Descricao</b><input class="form-control" type = "text" name = "descricao" id = "descricao" ><br>

            <b>VIP</b><input class="form-control" type = "text" name = "vip" id = "vip" ><br>

          </div></center>


        <center> <div class="col-md-6">
        	<b>Data de criação</b><input class="form-control" type = "datetime" name = "data_criacao" id = "data_criacao" ><br>

           <b>Telefone</b><input class="form-control" type = "text" name = "telefone" id = "telefone" ><br>

           <b>cpf</b><input class="form-control" type = "text" name = "cpf" id = "cpf" ><br>

           <b>Pontuação</b><input class="form-control" type = "text" name = "pontuacao" id = "pontuacao" ><br>

           <b>Categoria</b><input class="form-control" type = "text" name = "categoria" id = "categoria" ><br>

           <b>Data de nascimento</b><input class="form-control" type = "date" name = "data_nasc" id = "data_nasc" ><br>

           <b>Negócios Fechados</b><input class="form-control" type = "text" name = "neg_fechados" id = "neg_fechados" ><br>


          </div>
      </center> 

       </div>
   </form>
</div>
</form>
</div>




</body>

<?php
if(isset($_POST['enviar']))
{
	$id = $_POST['id'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
	$categoria = $_POST['categoria'];
	$cpf = $_POST['cpf'];
	$descricao = $_POST['descricao'];
    $email = $_POST['email'];
	$reg_trabalho = $_POST['regiao'];
	$vip = $_POST['vip'];
	$neg_fechados = $_POST['neg_fechados']; 
	$pontuacao = $_POST['pontuacao'];
	$data_criacao = $_POST['data_criacao'];
	$fotos = "";
    $disponibilidade = '0';



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
    $sql = "DELETE FROM tbl_lista_negra WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "ESTÁ FEITO";
} else {
    echo "Error deleting record: " . $conn->error;
}
}


$conn->close();
}

}
?>