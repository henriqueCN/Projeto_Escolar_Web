


<!DOCTYPE html>

<html>
<head>
<title>Work Now</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<script>
  $(function(){
  $("#enviar").click(function (){ 
  $.getJSON("tela_principal.php?email="+$(this).val(),"senha="+$("#senha").val(), function(dados){
    $("#email").val(dados.email);
      $("#senha").val(dados.senha);
  });
  });
    });
  
      
    </script>
</head>
<nav class=" col-sm-3 w3-sidebar w3-bar-block w3-black w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">

</nav>
<body class="w3-content w3-white" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-black w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>Categorias</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="select`s/selectpedr.php" class="w3-bar-item w3-button">Pedreiros</a>
    <a href="select`s/selectele.php" class="w3-bar-item w3-button">Eletricistas</a>
    <a href="select`s/selectpint.php" class="w3-bar-item w3-button">Pintores</a>
    <a href="select`s/selectdesi.php" class="w3-bar-item w3-button">Designers</a>
    <a href="select`s/selecteng.php" class="w3-bar-item w3-button">Engenheiros</a>
    <a href="select`s/selectmarc.php" class="w3-bar-item w3-button">Marceneiros</a>
  <a href="select`s/selectoutr.php" class="w3-bar-item w3-button">Outro</a>
  </div>
  <a href = "sobre.php"><h1>Sobre</h1></a>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contato</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Login</a>

    <a href="Work_now_Cadastro.php"  class="w3-bar-item w3-button w3-padding" >Cadastre-se</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide"></div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <h1 class="w3-left">Work Now</h1>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="fotos/fundo" alt="" style="Width:80%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 100px">
      <h1 class="w3-jumbo w3-hide-small" >Work Now</h1>
      <h1 class="w3-hide-large w3-hide-medium">Work Now</h1>
      <h1 class="w3-hide-small">Prestadores de serviços</h1>
      <!--<p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">Procurar Prestadores de Serviço</a></p>-->
    </div>
  </div>

  
  
  
  
  
  
  
  <div class="w3-container w3-text-grey">
    <h1>Trabalhadores:</h1>
  </div>
<?php
$con = new mysqli('localhost','root','','work_now');
$sql = "SELECT * FROM tbl_trabalhadores where vip ='1';";
$result = $con->query($sql);
if($result->num_rows > 0){
    $dados = $result->fetch_all(MYSQLI_ASSOC);
}
?>
  <!-- Product grid -->
  <div class="w3-row">
  <?php foreach ($dados as $user) : ?>
    <div class="w3-col l3 s5">
      <div class="w3-container">
        <img src="fotos/xuxu" style="width:100%"><br><br>
        <a href = "tela_login.php"><p><?php echo $user['nome']; ?></a><br><?php echo $user['descricao']; ?></p><br>
    
    
      </div>
    </div>

<?php endforeach; ?>
</div>
  
  
  
  
  
  
  
  
  

  <!-- Subscribe section -->
  <div class="w3-container w3-black w3-padding-32">
    <h1>Cadastre-se</h1>
    <p>Seja um trabalhador VIP</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Seu E-Mail..." style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Cadastrar</button>
  </div>
  
  
  
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Cadastre-se</h4>
        <form action="/Work_now_Cadastro.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Enviar</button>
        </form>
      </div>
    
    
    
    
    
    
    
    
    
    



      <div class="w3-col s4 w3-justify">
        <h4>Contatos</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Work Now</p>
        <p><i class="fa fa-fw fa-phone"></i> (31)99580-5480</p>
        <p><i class="fa fa-fw fa-envelope"></i> henriquecostadonascimento@gmail.com</p>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>
  
  
  
  
  
  
  
  
  


  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    <form method = "post" action = "autenticacao.php">
    
      <h2 class="w3-wide"style="margin-left: 70px;">Login</h2>
      <p><input class="w3-input w3-border" id ="email" type="text" name="email" placeholder="Digite o e-mail" required></p>
        <p><input class="w3-input w3-border" id = "senha" type="password" name="senha" placeholder="Digite a Senha" required> </p>
    
    <input name = "radi" type = "radio">Contratante<br>
    <br>
    <input name  = "radi" type = "radio">Trabalhador<br>
      <br><button type="submit" name = "login" id = "enviar" class="btn btn-success" >Login </button><br>
    
    
    </form>
    </div>
  </div>
</div>









<!--formulário de cadastro-->
<div id="oi" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
        <div class="w3-container w3-white w3-center">
            <i onclick="document.getElementById('oi').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      

            <form action="insertcad2.php" method="post">


            <center><h1>Cadastro</h1></center>
                <fieldset>

                    <!-- Form Name -->
                    <center><legend>Dados Pessoais</legend></center>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nome">Nome</label>
                        <div class="col-md-5">
                            <input id="nome" name="nome" type="text" placeholder="Dite o Nome de usuário" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="telefone">Telefone</label>
                        <div class="col-md-5">
                            <input id="telefone" name="telefone" type="text" placeholder="Digite o Número de Telefone" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="data_nasc">Nascimento</label>
                        <div class="col-md-5">
                            <input id="data_nasc" name="data_nasc" type="date" placeholder="Digite a Data de Nascimento" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="categoria">Categoria de Trabalho</label>
                        <div class="col-md-5">
                            <input id="categoria_trabalho" name="categoria_trabalho" type="text" placeholder="Digite a Categoria de Trabalho" class="form-control input-md" required="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="cpf">CPF</label>
                        <div class="col-md-5">
                            <input id="cpf" name="cpf" type="text" placeholder="Digite o CPF" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="reg_trabalho">Registro de Trabalho</label>
                        <div class="col-md-5">
                            <input id="reg_trabalho" name="reg_trabalho" type="text" placeholder="Digite o registro de trabalho" class="form-control input-md" required="">

                        </div>

                    </div><div class="form-group">
                        <label class="col-md-4 control-label" for="vip">Deseja ser VIP</label>
                        <div class="col-md-5">
                            <!--  <select name="cars">
                               <option value="volvo">Nenhum</option>
                               <option value="saab">Vip Silver</option>
                               <option value="fiat" selected>Vip Gold</option>
                               <option value="audi">Vip Platinum</option>
                               </select>-->
                            <input id="vip" name="vip" type="text" placeholder="Digite se deseja ser VIP" class="form-control input-md" required="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="descricao">Descrição</label>
                        <div class="col-md-5">
                            <input id="descricao" name="descricao" type="text" placeholder="Digite a Descrição" class="form-control input-md" required="">

                        </div>
                    </div>




                    <!--Select Basic -->
                    <!--<div class="form-group">
                      <label class="col-md-4 control-label" for="nivel">Nível</label>
                      <div class="col-md-5">
                        <select id="idAdmin" name="idAdmin" class="form-control">
                          <option value="1">Administrador</option>
                          <option value="2">Usuário</option>
                        </select>
                      </div>
                    </div>-->

                </fieldset>
                    <fieldset>
                        <center><legend>Dados de Login</legend></center>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email</label>
                            <div class="col-md-5">
                                <input id="email" name="email" type="email" placeholder="Digite o Email" class="form-control input-md" required="">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="pass">Senha</label>
                            <div class="col-md-5">
                                <input id="senha" name="senha" type="password" placeholder="Digite a Senha" class="form-control input-md" required="">

                            </div>
                        </div>

                        <script type="text/javascript">

                        </script>
                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="confirmar"></label>
                            <div class="col-md-8">
                               <center> <button id="Cadastrar" name="Cadastrar" type="submit" class="btn btn-primary">Confirmar</button>
                                <input type="reset" class="btn btn-danger" value="Limpar"></center>

                            </div>
                        </div>
            </form>




</body>
</html>
index.php
Abrir com
Exibindo index.php.