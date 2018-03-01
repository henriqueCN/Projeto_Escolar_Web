<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Tela inicial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #0000CC; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #000000; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><h3>Work Now</h3></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="tela_login.php"><h3>Logar</h3></a></li>
        <li><a href="work_now_cadastro.php"><h3>Cadastro</h3></a></li>
        
      </ul>
    </div>
  </div>
  
</nav>


<!-- Third Container (Grid) -->
<div class="container-fluid bg-1 text-center">    
  <h3 class="margin">Trabalhadores Cadastrados</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>João Paulo.</p>
      <img src="jucao.jpg" class="img-responsive margin" style="width:100%" alt="Image">
	  <p> Pedreiro</p>
    </div>
    <div class="col-sm-4"> 
      <p>Pedro Ribeiro.</p>
      <img src="jucao.jpg" class="img-responsive margin" style="width:100%" alt="Image">
	  <p> Eletricista</p>
    </div>
    <div class="col-sm-4"> 
      <p>Roberto Carlos</p>
      <img src="jucao.jpg" class="img-responsive margin" style="width:100%" alt="Image">
	  <p> Pedreiro</p>
    </div>
  </div>
</div>

<div class="container-fluid bg-1 text-center">    

  <div class="row">
    <div class="col-sm-4">
      <p>André Vignolli.</p>
      <img src="jucao.jpg" class="img-responsive margin" style="width:100%" alt="Image">
	  <p> Designer</p>
    </div>
    <div class="col-sm-4"> 
      <p>Henrique Costa.</p>
      <img src="jucao.jpg" class="img-responsive margin" style="width:100%" alt="Image">
	  <p> Pedreiro</p>
    </div>
    <div class="col-sm-4"> 
      <p>Alexandre Souza.</p>
      <img src="jucao.jpg" class="img-responsive margin" style="width:100%" alt="Image">
	  <p> Pintor</p>
    </div>
  </div>
</div>

<div class="container-fluid bg-1 text-center">    

  <div class="row">
    <div class="col-sm-4">
      <p>Marcos Vinicius.</p>
      <img src="jucao.jpg" class="img-responsive margin" style="width:100%" alt="Image">
	  <p> Pedreiro</p>
    </div>
    <div class="col-sm-4"> 
      <p>Clara Nunes.</p>
      <img src="maria.jpg" class="img-responsive margin" style="width:100%" alt="Image">
	  <p> Faxineira Doméstica</p>
    </div>
    <div class="col-sm-4"> 
      <p>Juca Mario.</p>
      <img src="jucao.jpg" class="img-responsive margin" style="width:100%" alt="Image">
	  <p> Pintor</p>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p><h1>Work Now</h1></p> 
</footer>

</body>
</html>
