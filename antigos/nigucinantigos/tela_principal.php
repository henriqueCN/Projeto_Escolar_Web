

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
<title>Teleta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
/* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
	  .container1{
    background-color: ;
    padding: 120px;
  }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body class="w3-theme-l5">

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







<!-- Navbar on small screens -->


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Perfil</h4>
         <p class="w3-center"><img src="imagens/pedreiro.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Contratante</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Minas Gerais, Vespasiano/roça</p>
		 <a href = "update_conta.php"><button type="button" class="btn btn-warning">Alterar Dados</button></a><br>
		 <br>
		 <a href = "crud.php"><button type="button" class="btn btn-danger" >Excluir Conta</button></a>
        
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      
      <br>
      
 
     
    
    <!-- End Left Column -->
    </div>
    
	
	
	
	
	

	<div class="w3-col m7">
	
    
      <div class="w3-row-padding">
        <div class="w3-col m7">

        </div>
      </div>
	
	<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
	<center><h1>Trabalhadores</h1></center>
	       	<?php

$con = new mysqli('localhost','root','','work_now');
$sql = "SELECT nome, email, telefone FROM tbl_trabalhadores";
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
<div class = "container">
<table class = "table table-hover">
    <tr><td>Nome</td><td>Email</td><td>Telefone</td></tr>
    <?php foreach ($relat AS $f):?>
             <tr><td><?php echo $f['nome']; ?></td><td><?php echo $f['email']; ?></td><td><?php echo $f['telefone']; ?></td></tr>
<?php endforeach; ?>
</table>
</div>
</body>
</html>
	

			<div class="w3-container w3-blue">
			
  <h2>Seja Pro !!! </h2>
            </div>
       
        
        <hr class="w3-clear">
        <p>O usuario pro tem uma grande vantagem, com o pro voce podera postar fotos junto ao seu post, assim os clientes poderam ver seu serviço, tambem garantindo um espaço de destaque para voce na pagina inicial.</p>
</form>
<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>


<div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
       <li class="w3-dark-grey w3-xlarge w3-padding-32">Normal</li>
        <li class="fa fa-close" style="color:red""w3-padding-16" >  Fotos em destaque </li>
        <li class="fa fa-close" style="color:red""w3-padding-16" >  Vizualização em destaque no site</li>
        <li class="fa fa-check" style="color:green""w3-padding-16" >  Email e contato disponivel no site</li>
        
        <li class= "w3-padding-16" >
          <h2>$ 34,99</h2>
          
        </li>
        <li class="w3-light-grey w3-padding-24">
          <li class="w3-light-grey w3-padding-24">
        
	   </li>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Pro</li>
        <li class="fa fa-check" style="color:green""w3-padding-16" >  Fotos em destaque </li>
        <li class="fa fa-check" style="color:green""w3-padding-16" >  Vizualização em destaque no site</li>
        <li class="fa fa-check" style="color:green""w3-padding-16" >  Email e contato disponivel no site</li>
       
        <li class= "w3-padding-16" >
          <h2>$ 49,99</h2>
          
        </li>
        <li class="w3-light-grey w3-padding-24">
         <a href="saibamais.php" > <button class="w3-button w3-white w3-padding-large w3-hover-black">Saiba Mais!!!</button></a>
        </li>
      </ul>
    </div>
  </div>
 
	</div>
	
	</div>
    <!-- Middle Column -->
   
     
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    
      <br>
      
      
      <br>
      
      
      <br>
      
     
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
 
</footer>


 
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
