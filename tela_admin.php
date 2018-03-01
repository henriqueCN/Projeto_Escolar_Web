


<!DOCTYPE html>
<html>
<title>Tela do Administrador</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Arial", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<nav id="nav"class="navbar navbar-inverse navbar-fixed-top " style="font-color:#FFA500">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#FFA500"href="index.php">Work Now</a>
    </div>
    <ul class="nav navbar-nav">



      <li  style="margin-rigth:10px "onclick="document.getElementById('contato').style.display='block'"><a href="#" style="color:#FFA500" >Contato</a></li>
     
      <li class="dropdown">
        <a class="dropdown-toggle"style="color:#FFA500" data-toggle="dropdown" href="#">Lista Negra
        <span class="caret"></span></a>
        <ul class="dropdown-menu"style="background-color:#E8E8E8">
           <li><a href="add_lista_negra.php">Adicionar</a></li>
          <li><a href="retirar_lista_negra.php">Retirar</a></li>      
        
          
        </ul>
      </li>

<li class="dropdown">
        <a class="dropdown-toggle"style="color:#FFA500" data-toggle="dropdown" href="#">Editar
        <span class="caret"></span></a>
        <ul class="dropdown-menu"style="background-color:#E8E8E8">
           <li><a href="update_contratante.php">Contratante</a></li>
          <li><a href="update_conta.php">Trabalhador</a></li>      
        
          
        </ul>
      </li>
    <li class="navbar-right"style="margin-left:660px"onclick="document.getElementById('newsletter').style.display='block'"><a href="logout_admin.php" style="color:#FFA500"<i class="fa fa-sign-out" aria-hidden="true"></i>Sair</a></li>
    </ul>
   
   
   
    
  
  </div>
</nav>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="tela_login.php" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Administração</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Admin</h4>
         <p class="w3-center"><img src="imagens/avatar1.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p>administração</p>


        </div>
      </div>
      <br>
      
      <!-- Accordion -->

      <br>
      
 
     
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              
			  
			   <!-- botao pra sair e pra mudar de pag -->                         
			  <a href="deletes/delete_trab.php" target="_blank"><button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>Exclusao Trabalhador</button></a>
        <a href="deletes/delete_contr.php" target="_blank"><button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>Exclusao Contratante</button></a><br>
        <br>
			  <a href="update_conta.php" target="_blank"><button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>Editar_Trabalhadores</button></a>
			  <a href="update_contratante.php" target="_blank"><button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>Editar_Contratantes</button></a>

<br>
<br>
				  <form method = "post" action = "relatorio_geral.php"><input  class="w3-button w3-theme" type = "submit" value = "Ver relatório completo"></form>
				  

			  
			  </p>
			  
            </div>
          </div>
        </div>
      </div>
      


     
      
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
