<?php

$con = new mysqli('localhost','root','','work_now');

$query = mysqli_query($con,"SELECT  nome FROM tbl_categoria");
$query1 = mysqli_query($con,"SELECT  nome FROM tbl_regioes");
if(isset($_POST['confirmar'])){
	$regiao = $_POST ['regiao'];
	$categoria = $_POST ['categoria'];
	$negocio = $_POST['negocio'];
	switch ($negocio){
		case 1:{
			if($regiao != "padrao" && $categoria != "padrao") {
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores where categoria_trabalho =".$categoria." and reg_trabalho = ".$regiao." order by neg_fechados desc";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					$relat = $result->fetch_all(MYSQLI_ASSOC);
				} 
				else{
					$relat = array();
				}
			}
			elseif($regiao != 0) {
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores where reg_trabalho=".$regiao." order by neg_fechados desc";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					$relat = $result->fetch_all(MYSQLI_ASSOC);
				}
				else{
					$relat = array();
				}
			}
			elseif($categoria != 0){
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores where categoria_trabalho=".$categoria." order by neg_fechados desc";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					$relat = $result->fetch_all(MYSQLI_ASSOC);
				}
				else{
					$relat = array();
				}
			}
			else{
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores order by neg_fechados desc";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					$relat = $result->fetch_all(MYSQLI_ASSOC);
				}
				else{
					$relat = array();
				}
			}
			break;
		}
		
		case 0:{
			if($regiao != 0 && $categoria != 0) {
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores where categoria_trabalho =".$categoria." and reg_trabalho = ".$regiao." order by neg_fechados";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					    $relat = $result->fetch_all(MYSQLI_ASSOC);
				} 
				else{
					$relat = array();
				}
			}
			elseif($regiao != 0) {
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores where reg_trabalho=".$regiao." order by neg_fechados ";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					$relat = $result->fetch_all(MYSQLI_ASSOC);
				}
				else{
					$relat = array();
				}
			}
			elseif($categoria != 0){
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores where categoria_trabalho=".$categoria." order by neg_fechados ";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					$relat = $result->fetch_all(MYSQLI_ASSOC);
				}
				else{
					$relat = array();
				}
			}
			else{
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores order by neg_fechados ";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					$relat = $result->fetch_all(MYSQLI_ASSOC);
				}
				else{
					$relat = array();
				}
			}
			break;
		}
		default:{
			if($re1giao != 0 && $categoria != 0) {
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores where categoria_trabalho =".$categoria." and reg_trabalho = ".$regiao."";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					    $relat = $result->fetch_all(MYSQLI_ASSOC);
				} 
				else{
					$relat = array();
				}
			}
			elseif($regiao != 0) {
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores where reg_trabalho=".$regiao." ";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					$relat = $result->fetch_all(MYSQLI_ASSOC);
				}
				else{
					$relat = array();
				}
			}
			elseif($categoria != 0){
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores where categoria_trabalho=".$categoria." ";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					$relat = $result->fetch_all(MYSQLI_ASSOC);
				}
				else{
					$relat = array();
				}
			}
			else{
				$sql=  "select id,nome,cpf,email from tbl_trabalhadores  ";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					$relat = $result->fetch_all(MYSQLI_ASSOC);
				}
				else{
					$relat = array();
				}
			}
			break;
		}
	
	}
}	

?>



<!DOCTYPE html>
<html>
<title>Tela do Administrador</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


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
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Arial", sans-serif}
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
<body class="w3-theme-l5">

<!-- Navbar -->
<!-- akii oooooo e o menuuuuu -->
<?php include('header.php'); ?>


 <div class="w3-container" style="margin-top:0px">
    <center><img src="fotos/fundo3" alt="" ></center>
 
  </div>




      
<!-- End Page Container -->

<br>

 <div class="w3-container w3-teal ">
   <center><h1>Gerar Relatório</h1>
   <form method="post" action="lista_geral.php">
<div class="form-group">
<label class="col-md-4 control-label" for="reg_trabalho">Categoria Trabalho</label>
<div class="col-md-5">

<select class="form-control" name="categoria" id="categoria_trabalho">
 <option value="padrao">Selecione</option>
 
 <?php while($prod = mysqli_fetch_array($query)) { ?>
 <option value="<?php echo $prod['nome'] ?>"  name="categoria_trabalho">
				<?php echo $prod['nome'] ?>
 <?php } ?>
 
 </select>
    
  </div>




</div>

<div class="form-group">
<label class="col-md-4 control-label" for="reg_trabalho">Regioes de Trabalho</label>
<div class="col-md-5">

<select class="form-control" name="regiao" id="reg_trabalho">
 <option value="padrao">Selecione</option>
 
 <?php while($prod = mysqli_fetch_array($query1)) { ?>
 <option value="<?php echo $prod['nome'] ?>" id="reg_trabalho" name="reg_trabalho">
                <?php echo $prod['nome'] ?></option>
 <?php } ?>
 
 </select>
    
  </div>

</div>

<div class="form-group">
<label class="col-md-4 control-label" for="reg_trabalho">Ordenar por Negocio Fechado</label>
<div class="col-md-5">

<select class="form-control" name="negocio" >
 <option>Selecione</option>

 <option value="1" >Mais Negocios Fechados</option>
 <option value="0" >Menos Negocios Fechados</option>
                
 </select>
    
  </div>

</div>

<input type="submit" name="confirmar" id="confirmar" size="20px" class="btn btn-success "> </a>
<br><br><br><br><br><br>

 




<div class="col-md-8">


<table class="table table-hover">
<tr><td>ID</td><td>Nome</td><td>CPF</td><td>Email</td></tr>

<?php 
if(isset($_POST['confirmar'])){
		foreach ($relat AS $f):?>
		<tr><td><?php echo $f['id']; ?></td><td><?php echo $f['nome']; ?></td><td><?php echo $f['cpf']; ?></td><td><?php echo $f['email']; ?></td></tr>
<?php 
		endforeach; 
}
?>
		


</table>
   <br><br>
     
  </div> 





  <!-- Footer -->
  <br><br><br><br><br><br><br><br><br><br><br><br>





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




<div id="contato" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('contato').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    
    
   <div>
      <img id="imgsobre" class="w3-left" src="img/team/2.jpeg"><br>
     <center> <H1>Work Now </H1><br>
               <h4>Duvida com algum comando ?<br>Entre em contato conosco.</h4>
      <div id="divsobre">

                 <form action="enviar.php" method="post" class="contactForm">


            
            
                <div class="form-group">
                <label  for="name">Nome:</label>
                <input type="text" class="form-control" name="nome" />
              <!--      <div class="validation"></div> -->
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" />
              <!--  <div class="validation"></div> -->
                </div>
                <div class="form-group">
                <label for="subject">Assunto</label>
                <input type="text" class="form-control" name="assunto" />
              <!--  <div class="validation"></div> -->
                </div>
                <div class="form-group">
                <label for="message">Mensagem</label>
                <textarea class="form-control" name="mensagem" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <!--  <div class="validation"></div> -->
                </div>
                
                 <input type="submit" name="btn_enviar"  value="Enviar"/>
              </form>



       </div>



     </div>



     </div>
    
  
    
    
    
    </div>
  </div>


<div id="oi" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
        <div class="w3-container w3-white w3-center">
            <i onclick="document.getElementById('oi').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      
            <h2 class="w3-wide"style="margin-left: 70px;">Cadastro Work Now</h2>
            <form action="insertcad.php" method="post">

                <!-- DADOS PESSOAIS-->
                <fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
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
    <label for="descricao">  reg_trabalho </label>
   </td>
   <td align="left">
    <input type="text" id="reg_trabalho" name="reg_trabalho">
   </td>
  </tr>
    <tr>
   <td>
    <label for="descricao"> Deseja ser vip? (estamos em fase de testes apenas coloque o numero(1)) </label>
   </td>
   <td align="left">
    <input type="text" id="vip" name="vip">
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


  

  

 </table>
<br />
</fieldset>
                <br />
                <!-- DADOS DE LOGIN -->
                
                <br />
                
            </form>
    
            
        </div>
    </div>
</div>








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


</html> 
