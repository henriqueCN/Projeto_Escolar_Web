
<!DOCTYPE html>
<html>
<title>Contratante</title>
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
  $(function(){
  $("#email").blur(function (){ 
  $.getJSON("webservices/web_contratante?categoria_trabalho="+$(this).val(), function(dados){
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
    <script type="text/javascript">// <![CDATA[
      $("#searchterm").keyup(function(e){
        var q = $("#searchterm").val();
        $.getJSON("http://en.wikipedia.org/w/api.php?callback=?",
        {
          srsearch: q,
          action: "query",
          list: "search",
          format: "json"
        },
        function(data) {
          $("#results").empty();
          $("#results").append("
 
Results for <b>" + q + "</b>
 
");
          $.each(data.query.search, function(i,item){
            $("#results").append("
<div><a href='http://en.wikipedia.org/wiki/" + encodeURIComponent(item.title) + "'>" + item.title + "</a>" + item.snippet + "</div>
");
          });
        });
      });
 
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

     height:470px; 
     width:600px;
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


html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>


<?php
session_start();
include ("header.php");
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
<?php


$con = new mysqli('localhost','root','','work_now');
$sql = "SELECT * FROM tbl_categoria;";
$result = $con->query($sql);
if($result->num_rows > 0){
$dados = $result->fetch_all(MYSQLI_ASSOC);
}


?>
<body>
  <div class = "uni">
  <div class = "col-md-4 quadro" >
              <div class="w3-container">
         <h4 class="w3-center">Bem Vindo <?php echo "$nome";?></h4>
         <p class="w3-center"><img src="imagens/avatar_perfil.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
     <center><a href = "update_contratante.php"><button type="button" class="btn btn-warning">Alterar Dados</button></a></center><br>
     <br>
     <center><a href = "deletes/delete_contr.php"><button type="button" class="btn btn-danger" >Excluir Conta</button></a></center><br>
     <br>

     <form method = "post" action = "lista_trabalhador.php">
<p>
Profissional desejado:<br>
<br>

<select name="pesquis" style = "border-radius:5px; height:40px; width: 200px;">
<?php foreach ($dados as $user) : ?>
  <option value="<?php echo $user['categoria']; ?>"><?php echo $user['categoria']; ?></option>
<?php endforeach; ?>
</select>

</p>

     <br>
     <input value = "Procurar" type = "submit" class = "btn btn-info"name = "pesquisar">
     </form>

        
        </div>
      </div>
      

<div class = "col-md-6 centro">
<form method = "post" action = "tela_contratante.php">
  <h3>Do que você precisa?</h3>
<input type = "text" name = "nom" class = "textbox" placeholder = "Digite seu nome">
<br>
<input type = "text" name = "cp" class = "textbox" placeholder = "Digite seu cpf">
<br>
<input type = "text" name = "categor" class = "textbox" placeholder = "Digite a categoria desejada">
<br>
<input type = "text" name = "regia" class = "textbox" placeholder = "Digite a sua região">
<br>
<input type = "text" name = "descr" class = "textare" placeholder = "Descreva o problema">
<br>
<br>

<input class= "btn btn-success" name = "postar" type = "submit" value = "Postar Requisição"><br>
</form>


</div>

      <div class = "col-md-2">
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
<?php
if(isset($_POST['postar']))
{
  $now = new DateTime();

  $descricao = $_POST['descr'];
  $nome = $_POST['nom'];
  $categoria = $_POST['categor'];
  $cpf = $_POST['cp'];
  $regiao = $_POST['regia'];
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
$result = $conn->query("SELECT * FROM tbl_servicos WHERE cpf_contratante='".$cpf."';");
if($result->num_rows > 0)
{
echo "Requisição já cadastrada";
}
else{
  $sql = "INSERT INTO tbl_servicos (id,contratante,cpf_contratante,categoria,descricao,data_criacao,regiao) VALUES (null ,'".$nome.
                          "','".$cpf.
                          "','".$categoria.
                          "','".$descricao.
                          "','".$data_criacao.
                          "','".$regiao."');";
                      


if ($conn->query($sql) === TRUE) {
    echo "Requisitado";
} else {
    echo "Error record: " . $conn->error;
}
}


$conn->close();
}


?>
