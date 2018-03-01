<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>Work Now</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/shop-homepage.css" rel="stylesheet">  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	$(function(){
	$("#categoria").blur(function (){
		
		
	$.getJSON("webservice.php?categoria="+$(this).val(), function(dados){
	    $(".email").val(dados.email);
        $("#nome").val(dados.nome);
        $("#pontuacao").val(dados.pontuacao);
        $("#categoria").val(dados.categoria_trabalho);
        $("#telefone").val(dados.telefone);
	
	});
	
	});
    });
	
	    
    </script>

</head>


<body background = "imagens/duca">
<style>
  .container-fluid{
    background-color: purple;
    padding: 80px;
  }
  .container1{
    background-color: ;
    padding: 120px;
  }
  .container-fluid{
    background-color: yellow;
    padding: 80px;
  }
  .text-info
  {
    font-family: "Arial Black";
    font-style: italic;

  }
  .text-danger
  {
    font-family: "Comic Sans MS";
    font-style: italic;

  }
</style>

<nav class="w3-sidebar w3-bar-block w3-Cyan w3-collapse w3-top " style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b></b></h3>
  </div>

  <div class="w3-padding-64 w3-large w3-text-blue" style="font-weight:bold">
<form background = "imagens/papel">
<select  id = "categoria" name = "categoria" >
  <option id ="" name ="" value="">Categoria</option>
  <option id ="" name ="" value="Pedreiro">Pedreiro</option>
  <option id ="" name ="" value="eletricista">eletricista</option>
  <option id ="" name ="" value="Pintores">Pintores</option>
  <option id ="" name ="" value="Designers">Designers</option>
  <option id ="" name ="" value="Marceneiros">Marceneiros</option>
  <option id ="" name ="" value="Engenheiros">Engenheiros</option>
  <option id ="" name ="" value="Outros">Outros</option>
  <input type = "text" id = "nome">
</select>
  </div>

  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contato</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Login</a> 
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Cadastre-se</a>
</nav>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Mudar navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Work Now</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="sobre.php">Sobre Nós</a>
                    </li>
                    <li>
                        <a href="tela_principal.php">Prestadores de serviço</a>
                    </li>
                    <li>
                        <a href="Work_now_Cadastro.php">Cadastro</a>
                    </li>
					  <li>
                        <a href="tela_login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
            </div>


            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="fotos/foto_carrossel1" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="fotos/foto_carrossel2" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="fotos/foto_carrossel3" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
<?php

$con = new mysqli('localhost','root','','work_now');
$sql = "SELECT nome, email,categoria_trabalho, telefone FROM tbl_trabalhadores";
$result = $con->query($sql);
if($result->num_rows > 0){
    $relat = $result->fetch_all(MYSQLI_ASSOC);
}else{
    $relat = array();
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
</head>
<body>
<div class = "container1">
<center><h1>Trabalhadores cadastrados</h1></center>
<table class = "table table-bordered">
    <tr><td class = "text-info">Nome</td><td class = "text-info">Email</td><td class = "text-info">categoria</td><td class = "text-info">Telefone</td></tr>
    <?php foreach ($relat AS $f):?>
             <tr><td><?php echo $f['nome']; ?></td><td><?php echo $f['email']; ?></td><td><?php echo $f['categoria_trabalho']; ?></td><td><?php echo $f['telefone']; ?></td></tr>
<?php endforeach; ?>
</table>

            </div>

        </div>

    </div>
	</form>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
         
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->

</body>

</body>
</html>
