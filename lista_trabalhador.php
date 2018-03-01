

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

 
// ]]></script>
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

     height:450px; 
     width:300px;
     border-radius:20px;
     margin-top:50px;
  }
  .centro{
     height:600px; 
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
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>


<?php
session_start();

$email = $_SESSION['mail']; 
$senha = $_SESSION['pass']; 

$server = "localhost";
$usuario = "root";
$senhaserver = "";
$bd = "work_now";
$con = mysqli_connect ($server,$usuario,$senhaserver,$bd);

$result = $con->query("SELECT * FROM tbl_contratantes where email='".$email."'AND senha='".md5($senha)."';");

if($result->num_rows > 0){
  while($linha = $result->fetch_assoc()){
    $mail = $linha["email"];
    $pass = $linha["senha"];
    $nome = $linha["nome"];
    $telefone = $linha["telefone"];
    $regia = $linha["regiao"];

    
    
  }
}
else{
  echo "Deu ruim";
}

?>
<body>
  <?php include('header.php'); ?>
  <div style = "margin-top: 50px">
  <div style = "margin-top: 50px" class = "col-md-3" quadro>
              <div class="w3-container">
         <h4 class="w3-center">Bem Vindo <?php echo "$nome";?></h4>
         <p class="w3-center"><img src="imagens/avatar_perfil.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>

     <center><a href = "update_conta.php"><button type="button" class="btn btn-warning">Alterar Dados</button></a></center><br>
     <br>
     <center><a href = "crud.php"><button type="button" class="btn btn-danger" >Excluir Conta</button></center></a>
     <br>
     <br>

        </div>
      </div>
      </div>
<?php

$catego = $_POST['pesquis'];
$con = new mysqli('localhost','u354545446_maste','','u354545446_quick');
$sql = "SELECT * FROM tbl_trabalhadores where categoria_trabalho = '$catego' ORDER BY RAND( ) LIMIT 8;";
$result = $con->query($sql);
if($result->num_rows > 0){
$dados = $result->fetch_all(MYSQLI_ASSOC);
}


?>

      <div class = "col-md-7 centro">

<center><h3>Trabalhadores encontrados: </h3></center><br>

<div>
  <?php foreach ($dados as $user) : ?>
    <div class="w3-col l3 s1">
      <div class="w3-container">
        <img src="fotos/avatar5" style="width:70%; border-radius: 20px;"><br><br>
        <a href = "tela_login.php"><p><?php echo $user['nome']; ?></a><br><?php echo $user['descricao']; ?><br>(31)<?php echo $user['telefone']; ?></p><br>
    
    
      </div>
    </div>

<?php endforeach; ?>
</div>

</div>
</div>




      <div class = "col-md-1">
              <div class="w3-card-2 w3-round w3-white quadro">
        <div class="w3-container">

         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>Usuário: <?php echo "$nome";?></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>Região: <?php echo "$regia";?></p>

        
        </div>
      </div>
      </div>
    </div>


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

