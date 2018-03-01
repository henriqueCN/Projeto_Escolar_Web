<html>
<?php
session_start();
?>
<head>

    <title> Atualizar </title>
    <meta name="description">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(function(){
            $("#cpf").blur(function (){
                $.getJSON("webservices/webservice2.php?cpf="+$(this).val(), function(dados){
                    $("#email").val(dados.email);
                    $("#id").val(dados.id);
                    $("#nome").val(dados.nome);
                    $("#regiao").val(dados.regiao);
                    $("#telefone").val(dados.telefone);
                    $("#cpf").val(dados.cpf);

                    $("#senha").val(dados.senha);
                });
            });
        });


    </script>
    <style >
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

  #myiequip1
{
  
    border-radius: 50px;
     height: 100px;
    width: 100px; 
  
   
  border-style: solid;
    border-color: #000000 ;


}
.dundo{
  background-color: #CDC5BF;
}


 </style>

</head>
<?php include('header.php') ?>

<body class = "dundo">





<center>
  <div id="round1" style="margin-top:100px" class="container">


<form action="update_contratante.php" method="post">

    <!-- DADOS PESSOAIS-->
    <fieldset>
        <h2>Dados Pessoais:</h2><br>
        <table cellspacing="10">
            <tr>
                <td>
                    <label for="categoria">Digite o Cpf: </label>
                </td>
                <td align="left">
                    <input class="form-control"  type="text" id="cpf" name="cpf">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nome">Nome: </label>
                </td>
                <td align="left">
                    <input type="text" class="form-control" id="nome"name="nome">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Regiao: </label>
                </td>
                <td align="left">
                    <input class="form-control" type="text" id="regiao" name="regiao">
                </td>
            </tr>
            </tr>
            <tr>
                <td>
                    <label>Telefone: </label>
                </td>
                <td align="left">
                    <input  class="form-control" type="text" id="telefone" name="telefone" >
                </td>
            </tr>
            <tr>
               
            </tr>
            <tr>
                <td>





        </table>
        <br />
    </fieldset>
    <br />
    <!-- DADOS DE LOGIN -->
    <fieldset>
        <h2>Dados de login:</h2><br>
        <table cellspacing="10">
            <tr>
                <td>
                    <label for="email">E-mail: </label>
                </td>
                <td align="left">
                    <input class="form-control"  type="email" id="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pass">Senha: </label>
                </td>
                <td align="left">
                    <input  class="form-control" type="password" id = "senha" name="senha">
                </td>
            </tr>
        </table>
    </fieldset>
    <br />
  <input  type="submit" class="btn btn-primary "value = "Atualizar" name = "Atualizar">
<input type="reset" class="btn btn-warning "value="Limpar">
<a href="tela_contratante.php"  <button  name = "sair" id = "sair" class="btn btn-danger "style="margin-rigth:100px" >Cancelar </button></a>
</form>

  </div>
</center>










<?php

if(isset($_POST['Atualizar']))
{

    $telefone = $_POST['telefone'];
    $senha = md5($_POST['senha']);
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $regiao = $_POST['regiao'];
    $pontuacao = "";


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "work_now";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


//Verificando existencia do usuario
    $result = $conn->query("SELECT * FROM tbl_contratantes WHERE email='".$_POST['email']."';");
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



        $sql = "UPDATE tbl_contratantes SET nome = '".$nome.
            "',regiao='".$regiao.
            "',email ='".$email.
            "',telefone='".$telefone.
            "',cpf='".$cpf.
            "',pontuacao = '".$pontuacao.
            "',senha = '".$senha.
            "'WHERE cpf= ".$cpf.";";
        if ($conn->query($sql) === TRUE) {
            echo "Arquivo Atualizado!!!";
        }
        else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
}
?>