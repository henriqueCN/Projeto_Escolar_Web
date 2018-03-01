<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <script>
	$(function(){
	$("#email").blur(function (){	
	$.getJSON("webservices/webservice.php?email="+$(this).val(), function(dados){
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
.funde{
	background-color: #D3D3D3;
}
</style>
</head>
<?php include('header.php'); ?>
<div id="newsletter" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
      <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
       <div class="row">
      <div class="col-md-3">

        <img id="imgsobre" class="w3-left" src="img/team/2.jpeg"><br><br>
      </div>
      <div class="col-md-6">
          
     <h2 class="w3-wide">Sair ?</h2>
    <p>Para sair click no botão abaixo.</p>
        <p> </p>
    
         
             <a href="index.php">  <button  name = "sair" id = "sair" class="btn btn-danger "style="margin-rigth:100px" >Sim, quero sair. </button></a>

      </div>



    
        
    <br>
    
    
        </div>
       </div>
     </div>
   </div>




<!-- olaaaa-->


















<body style = "margin-top:100px;" class = "funde">

	<center>
		
<div>

<button class="btn btn-primary">Pesquisar <i class="fa fa-search "></i></button><br>
<br>
<form action="add_lista_negra.php" method="post">

<div class="row">

    <center><div class="col-md-12">
    	<input class = "textbox" type = "email" Placeholder = "Digite o email do usuário" id = "email">
    	
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
</div>
</form>





<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>






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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work_now";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//Verificando existencia do usuario
$result = $conn->query("SELECT * FROM tbl_lista_negra WHERE email='".$_POST['email']."';");
if($result->num_rows > 0)
{
echo "usuario já cadastrado";
}
else{
	$sql = "INSERT INTO tbl_lista_negra VALUES (null ,'".$nome.
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
													"','".$data_criacao."');";
											

if ($conn->query($sql) === TRUE) {
    $sql = "DELETE FROM tbl_trabalhadores WHERE id='".$id."'";

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
