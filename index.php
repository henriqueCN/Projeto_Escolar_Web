
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
<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
#myImg {
    border-radius: 50px;
    
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

#myiequip1
{
	
    border-radius: 50px;
     height: 200px;
    width: 200px; 
  
   
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

#imgsobre
{
  
    border-radius: 50px;
     height: 100px;
    width: 100px; 
  
   
  border-style: solid;
    border-color: #000000 ;


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


#divsobre {
    background-color: lightgrey;
   
    border: 2px solid black;
    padding: 25px;
    margin: 25px;
     height: auto;
    width: auto;
}
.textbox{
  height:30px;
  width:400px;
  border-radius:5px;
  margin-right:80px;
  font-size:20px;
}
.textbox1{
  height:30px;
  width:200px;
  border-radius:5px;
  margin-right:80px;
  font-size:20px;
}

.baci{
  background-color: #000000;
}
.dis{

background-color: #FFFACD;
border-radius: 100px;
}
.proc_traba{
background-color: #CD6600;
height:600px;
width:1200px;

}
.carousel{
  height:790px;
width:1340px;
}
.corpo{
  font-family: 'Quattrocento Sans', sans-serif;
}

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

<body >
  <div class = "corpo">
<!-- akii oooooo e o menuuuuu -->
<nav id="nav"class="navbar navbar-inverse navbar-fixed-top" style="font-color:#FFA500">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand corpo" style="color:#FFA500"href="#">Work Now</a>
    </div>
    <ul class="nav navbar-nav">
      <li  style="margin-rigth:10px "onclick="document.getElementById('contato').style.display='block'"><a href="#" style="color:#FFA500" >Contato</a></li>
     
      <li ><a href="#equipe"style="color:#FFA500">Equipe</a></li>

<li class="dropdown">
        <a class="dropdown-toggle"style="color:#FFA500" data-toggle="dropdown" href="#">Sobre<span class="caret"></span></a>
        <ul class="dropdown-menu"style="background-color:#E8E8E8">
         <li  style="margin-rigth:10px"onclick="document.getElementById('info').style.display='block'"><a href="#" >Informações Legais</a></li>
         
         <li><a href="#sobre">Sobre a Work Now</a></li>
          
        </ul>
      </li>
	  <li class="navbar-right"style="margin-left:660px"onclick="document.getElementById('newsletter').style.display='block'"><a href="#" style="color:#FFA500">Login</a></li>
<li class="dropdown">
        <a class="dropdown-toggle"style="color:#FFA500" data-toggle="dropdown" href="#">Cadastro<span class="caret"></span></a>
        <ul class="dropdown-menu"style="background-color:#E8E8E8">
         <li  style="margin-rigth:10px"onclick="document.getElementById('oi').style.display='block'"><a href="#" >Cadastrar-se como Trabalhador</a></li>
         
         <li  style="margin-rigth:10px"onclick="document.getElementById('oi2').style.display='block'"><a href="#" >Cadastrar-se como Contratante</a></li>
          
        </ul>
      </li>
    </ul>
  </div>
</nav>
<body>

<div >
<br>
<br>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">

        <img src="imagens/homem2.jpg" value = ""alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="imagens/ferramenta2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">

        </div>
      </div>
    
      <div class="item">
        <img src="imagens/mulher1.jpg" alt="New York" style="width:100%;">

        <div class="carousel-caption">

        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<!-- Overlay effect when opening sidebar on small screens -->

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:0px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->


  <!-- Image header -->
  <div class="w3-container">
    <center><img src="" alt="" ></center>
 
  </div>

  
  <br>
  <br>
  <br>
  <br>
  <br>
   

  
   <center><div style = "color:#000000; border-radius:18px; " class="proc_traba">
    <div style = "margin-left:20px; margin-top:0px;">
    <h1 style = "color: #000000; border-radius:10px; margin-right:87px;" class = "corpo">Procurar por um Profissional</h1>
   
     <form>
<input type = "text" name = "nom" class = "textbox" placeholder = "Digite seu nome">
<br>
<br>
<input type = "text" name = "cp" class = "textbox" placeholder = "Digite seu cpf">
<br>
<br>
<input type = "text" name = "categor" class = "textbox" placeholder = "Digite a categoria desejada">
<br>
<br>
<input type = "text" name = "regia" class = "textbox" placeholder = "Digite a sua região">
<br>
<br>
<input type = "text" name = "descr" style = "height: 100px"class = "textbox" placeholder = "Descreva o problema">
<br>
<br>
<input class= "btn btn-success" style = "margin-right: 80px;" onclick="document.getElementById('oi2').style.display='block'" href = "#" name = "postar"  value = "Postar Requisição"><br>
  
    </form>
  </div>
</div></center>

  
  <br>
  <br>
  <!-- colocar os links nos fa fa -->
 
  <br>




  <center><div class="container-fluid" id="equipe" style="background-color:">
               <div class="col-lg-12 text-center">
            <h2 class=" ">Equipe Work Now</h2>
           <br>
          </div>
     <div class="row">
      <div class = "col-md-2">
      </div>
	  <div  class="col-md-2" style="margin-left:20px">

              <img src="img/team/10.jpg" id="myiequip"><br>
			   <center> <h6>Henrique Nascimento</h6>
			   <p ><h6 class="text-muted">Programador PHP/html/Mysql<h6></p>
          <div>      
          <button  onclick="document.getElementById('henri').style.display='block'" class = "btn btn-warning">sobre</button>         </div>
			   <ul class="list-inline social-buttons">

       </div>
	       <div  class="col-md-1" ></div>
	    <div  class="col-md-2" >

              <img src="img/team/20.jpg" id="myiequip"><br>
			   <center> <h6>Tiago Ferreira</h6>
			   <p ><h6 class="text-muted">Programador Front-End<h6></p>
         <div>
          <button  onclick="document.getElementById('tiagor').style.display='block'" class = "btn btn-warning">sobre</button>

         </div>
			   <ul  class="list-inline social-buttons">
			  

			  
       </div>


<div  class="col-md-1" ></div>

	    <div  class="col-md-2" >

              <img src="img/team/30.png" id="myiequip1"><br>
			   <center> <h6 >Tiago Martins</h6>
			   <p ><h6 class="text-muted">Programador MySql<h6></p>
       <div>
          <button  onclick="document.getElementById('tiago').style.display='block'" style = "" class = "btn btn-warning">sobre</button>
       </div>
  

			   <ul class="list-inline social-buttons">
			  
               

			  
       </div>
	    <div  class="col-md-2"style="margin-left:120px" >

             
       </div>
          <div  class="col-md-2" >
		   <img src="img/team/41.jpg" id="myiequip1"><br>
			   <center> <h6 >Vitor Eugenio</h6>
			   <p ><h6 class="text-muted">Programador Front-End/Back-End<h6></p>
        <div>
          <button  onclick="document.getElementById('genim').style.display='block'" class = "btn btn-warning">sobre</button>
        </div>
			   <ul class="list-inline social-buttons">
			  

			  
		  </div>
		  <div  class="col-md-2" ></div>

		   <div  class="col-md-2" >

              <img src="img/team/50.jpg" id="myiequip1"><br>
			   <center> <h6 > Mariana Luiza</h6>
			   <p ><h6 class="text-muted">Marketing<h6></p>
        <div>
          <button  onclick="document.getElementById('mari').style.display='block'" class = "btn btn-warning">sobre</button>
        </div>
			   <ul class="list-inline social-buttons">
			  
</center>
			  
       </div>

  </div>
  </div>
<br>
<br>
<br>
<br>
  <div id="sobre" class="container-fluid">
  <div class="row"  style="background-color:#000000">
               <div class="col-lg-12 text-center">
            <h2 style = "color:#FFA500"class="">Work Now</h2>
            <h3 style = "color:#FFA500" class="section-subheading text-muted"><small>Buscando serviços para lhe servir.</small></h3><br>
            <p>Buscando Trabalhadores autônomos de forma rápida e segura</p>
          </div>
     <div class="row">
  
       
  </div>
   </div>
</div>

<!-- Newsletter Modal -->

<!-- configurar o btn de recuperar -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content  w3-animate-zoom" style="padding:10px;background-color:grey">
    <div class="w3-container w3-grey w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
	  <form method = "post" action = "autenticacao.php">
	  
      <h2 class="w3-wide"style="margin-left: 70px;">Formulário de Login</h2>
      <img src="img/team/loginav.png" id="myiequip1"><br>
      <br>
      <br>
      <b>E-mail:</b> <input class="textbox" id ="email" type="text" name="email" placeholder="Digite o e-mail" required></p>
      <b>Senha:</b> <input class="textbox" id = "senha" type="password" name="senha" placeholder="Digite a Senha" required></p>
		  <br>
      <br>
	        <br><button type="submit" name = "login" id = "enviar" class="btn btn-success">Login </button>
              <button  type = "reset" class="btn btn-danger "style="margin-rigth:100px" >Limpar </button><br>
              <br>
              <br>
        </form>
    </div>
  </div>
</div>





<div id="contato" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('contato').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    
    
   <div>
      <img id="imgsobre" class="w3-left" src="img/team/2.jpeg"><br>
     <center> <H1>Work Now </H1><br>
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

<div class = "col-md-2">
</div>

<!-- tiago M Modal  falar um pocu de vc-->
<div id="tiago" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('tiago').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    
    
     <div>
      <img id="imgsobre" class="w3-left" src="img/team/30.png"><br>
     <center> <H1>Tiago Martins </H1><br>
       <div id="divsobre">
         <h2 >Nascido em MG estudei no colegio COTEMIG 2015-2017,participação no projeto : Programador MySql.</h2> 
       </div>



     </div>



     </div>
    
  
    
    
    
    </div>
  </div>

</div>



<!-- tiago M Modal  falar um pocu de vc-->
<div id="genim" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('genim').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    
    
     <div>
      <img id="imgsobre" class="w3-left" src="img/team/41.jpg"><br>
     <center> <H1>Vitor Eugenio  </H1><br>
      <div id="divsobre">
         <h2 >Nascido em MG estudei no colegio COTEMIG 2015-2017,participação no projeto : Programador back-end.</h2> 
       </div>



     </div>


     </div>
    
  
    
    
    
    </div>
  </div>
</div>
<!-- tiago M Modal  falar um pocu de vc-->
<div id="mari" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('mari').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    
    
     <div>
      <img id="imgsobre" class="w3-left" src="img/team/50.jpg"><br>
     <center> <H1>Mariana Ottati </H1><br>
       
<div id="divsobre">
<h2 >Nascida em MG estudei no colegio COTEMIG 2015-2017,participação no projeto : Divulgação e front-end</h2>

</div>



     </div>
    
  
    
    
    
    </div>
  </div>
</div><!-- tiago M Modal  falar um pocu de vc-->

<div id="info" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('info').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    
    
     <div>
      <br>
     <center> <H1>Work Now </H1><br>
      <div id="divsobre">

         </div>



     </div>

     </div>
    
  
  
    
    </div>
  </div>



<div id="tiagor" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('tiagor').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    
    
     <div>
      <img id="imgsobre" class="w3-left" src="img/team/20.jpg"><br>
     <center> <H1>Tiago Ferreira </H1><br>
      <div id="divsobre">
         <h2 >Nascido em MG estudei no colegio COTEMIG 2015-2017,participação no projeto: front end.</h2> </div>



     </div>

     </div>
    
  
  
    
    </div>
  </div>
</div>
<!-- tiago M Modal  falar um pocu de vc-->
<div id="henri" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('henri').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    
    
     <div>
    
     <center> <H1>Henrique Nascimento</H1><br>
      <div id="divsobre">
         <h2 >Nascido em MG estudei no colegio COTEMIG 2015-2017,participação no projeto : Programador PHP.</h2> 
       </div>



     </div>


     </div>
    
  
    
    
    
    </div>
  </div>
</div>





<div id="oi" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="padding:12px;background-color:grey">
        <div class="w3-container w3-grey w3-center">
            <i onclick="document.getElementById('oi').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
			<div class = "">
            <h2 class="w3-wide"style="margin-left: 70px;">Cadastro Trabalhador</h2><br>
 <center><form action="insertcad.php" method="post">
<b>E-mail:    </b><input class="textbox1" type = "email" name = "email" id = "mail">
<b>Nome:   </b><input class=" textbox1" type = "text" name = "nome" id = "nome" ><br>
<br>
<b>Senha:     </b><input class="textbox1" type = "password" name = "senha" id = "senha" >
<b>Regiao:     </b><input class="textbox1" type = "text" name = "regiao" id = "regiao" ><br>
<br>
<b>Descricao:     </b><input class="textbox1" type = "text" name = "descricao" id = "descricao" ><br>
<br>
<b>VIP:</b>
<select name="vip" style = "border-radius:5px; height:40px; width: 200px;">
  <option value ="1">Sim</option>
  <option value ="0">Não</option>
</select><br>
<br>
<b>Telefone:     </b><input class="textbox1" type = "text" name = "telefone" id = "telefone" ><br>
<br>
<b>cpf:     </b><input class="textbox1" type = "text" name = "cpf" id = "cpf" >

<b>Categoria:</b>
<select name="categoria" style = "border-radius:5px; height:40px; width: 200px;">
  <option value ="Pedreiro">Pedreiro</option>
  <option value ="Eletricista">Eletricista</option>
</select><br>
<br>
<b>Data de nascimento:     </b><input class="textbox1" type = "date" name = "data_nasc" id = "data_nasc" ><br>
<br>
<br>
<input type = "submit" class = "btn btn-success" name = "enviar">
<input class = "btn btn-warning" type = "reset">
<br>
<br>
<br>
</form></center>
		
            </div>
        </div>
    </div>
</div>

<div id="oi2" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="padding:12px;background-color:grey">
        <div class="w3-container w3-grey w3-center">
            <i onclick="document.getElementById('oi2').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <div class = "">
            <h2 class="w3-wide"style="margin-left: 70px;">Cadastro Contratante</h2><br>
 <center><form action="insertcontr.php" method="post">
<b>E-mail:    </b><input class="textbox1" type = "email" name = "email" id = "mail">
<b>Nome:   </b><input class=" textbox1" type = "text" name = "nome" id = "nome" ><br>
<br>
<b>Senha:     </b><input class="textbox1" type = "password" name = "senha" id = "senha" >
<b>Regiao:     </b><input class="textbox1" type = "text" name = "regiao" id = "regiao" ><br>
<br>
<br>
<b>Telefone:     </b><input class="textbox1" type = "text" name = "telefone" id = "telefone" ><br>
<br>
<b>cpf:     </b><input class="textbox1" type = "text" name = "cpf" id = "cpf" >
<b>Data de nascimento:     </b><input class="textbox1" type = "date" name = "data_nasc" id = "data_nasc" ><br>
<br>
<br>
<input type = "submit" class = "btn btn-success" name = "enviar">
<input class = "btn btn-warning" type = "reset">
<br>
<br>
<br>
</form></center>
    
            </div>
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

</body>
</html>
