<?php include ("header.php");?>
<!DOCTYPE html>
<html>
<title>Tela Principal</title>
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
  <script>

  </script>
<style>
/* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
      .quadro{
     background-color: #FFFAF0;
     height:580px; 
     width:300px;
     border-radius:20px;
     margin-top:50px;
  }
  .centro{

     height:550px; 
     width:700px;
     border-radius:20px;
     margin-top:50px;
     background-color: #C1CDC5;
  }
  .textbox{
    margin-top: 20px;
    width: 400px;
    height: 30px;
    border-radius:5px;
    margin-right: 10px;

  }
    .textare{
    margin-top: 20px;
    width: 400px;
    height: 100px;
    border-radius:5px;
    margin-right: 10px;

  }
  .bot{
    margin-top: 20px;
    color: #FFFFFF;
    background-color: #B9D3EE;
  }
  .trabs{
    background-color: #000000;
    margin-top: 20px;
    width: 400px;
    height: 80px;
    border-radius:5px;
    margin-right: 10px;
  }

  .uni{
    margin-top: 50px;
  }
  .containe{
    background-color: #DCDCDC;
    margin-top: 10px;
    width: 400px;
    height: 90px;
    border-radius:10px;
    margin-right: 10px;

  }


html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<?php

?>
<body class="w3-theme-l5 responsive">

<!-- Navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Inicio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="tela_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	
      </ul>
    </div>
  </div>
</nav>

<?php
session_start();

$email = $_SESSION['mail']; //coloco em $erro os dados da sessao..
$senha = $_SESSION['pass']; //coloco em $erro os dados da sessao..

$server = "localhost";
$usuario = "root";
$senhaserver = "";
$bd = "work_now";
$con = mysqli_connect ($server,$usuario,$senhaserver,$bd);

$result = $con->query("SELECT * FROM tbl_trabalhadores where email='".$email."'AND senha='".md5($senha)."';");

if($result->num_rows > 0){
	while($linha = $result->fetch_assoc()){
		$mail = $linha["email"];
		$pass = $linha["senha"];
		$nome = $linha["nome"];
		$regia = $linha["reg_trabalho"];
		$categoria = $linha["categoria_trabalho"];
		$descricao = $linha["descricao"];
		
		
	}
}
else{
	echo "Deu ruim";
}

?>

<!-- Page Container -->

  <!-- The Grid -->

    <!-- Left Column -->
    <div class="col-md-3">
      <!-- Profile -->

<div class = "quadro">
         <h4 class="w3-center"><?php echo "$nome";?></h4>
         <p class="w3-center"><img src="imagens/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><?php echo "$categoria";?></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo "$descricao";?></p>
		 <a href = "update_conta.php"><button type="button" class="btn btn-warning">Alterar Dados</button></a><br>
		 <br>
		 <a href = "deletes/delete_trab.php"><button type="button" class="btn btn-danger" >Excluir Conta</button></a><br>
     <br>
     <form method = "post" action = "tela_trabalhador.php">
      <h3>Atualizar Quadro de pedidos</h3>
           <a><button name = "disponivel" type="submit" class="btn btn-primary">Atualizar</button></a><br>

     <h3>Disponibilidade</h3>
     <a><button name = "disponivel" type="submit" class="btn btn-success">Disponível</button></a>
     <a><button name = "indisponivel" type="submit" class="btn btn-info" >Indisponível</button></a>
     </form>
        </div>

    </div>


<?php

$con = new mysqli('localhost','root','','work_now');
$sql = "SELECT * FROM tbl_servicos where trabalhador= 'nenhum' ORDER BY RAND( ) LIMIT 4;";
$result = $con->query($sql);
if($result->num_rows > 0){
$dados = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<div class = "col-md-7 centro">

<center><h3>Serviços Pendentes:</h3></center><br>


  <?php foreach ($dados as $user) : ?>
      <div class="containe">
        <a href = "tela_login.php"><p><?php echo $user['contratante']; ?></a> <?php echo $user['regiao']; ?><br>
        <p><?php echo $user['descricao']; ?></p>
        <p><?php echo $user['categoria']; ?></p><br>
      </div>

   <?php endforeach; ?>
</div>

</div>
</div>

  <div>


 
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
</html> 
<?php
if(isset($_POST['disponivel']))
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work_now";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Verificando existencia do usuario
$result = $conn->query("SELECT * FROM tbl_trabalhadores WHERE email='".$email."';");
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
  
$sql = "UPDATE tbl_trabalhadores SET disponibilidade = '1' WHERE id= ".$id.";";
if ($conn->query($sql) === TRUE) {
    echo "Você está disponível";
}
else {
    echo "Error updating record: " . $conn->error;
}

$conn->close(); 
}
}
else if(isset($_POST['indisponivel']))
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work_now";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Verificando existencia do usuario
$result = $conn->query("SELECT * FROM tbl_trabalhadores WHERE email='".$email."';");
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
  
$sql = "UPDATE tbl_trabalhadores SET disponibilidade = '0' WHERE id= ".$id.";";
if ($conn->query($sql) === TRUE) {
    echo "Você está indisponível";
}
else {
    echo "Error updating record: " . $conn->error;
}

$conn->close(); 
}
}
?>