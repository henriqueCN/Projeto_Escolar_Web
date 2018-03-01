<?php
$con = new mysqli('localhost','root','','work_now');
$sql = "SELECT * FROM tbl_trabalhadores;";
$result = $con->query($sql);
if($result->num_rows > 0){
    $dados = $result->fetch_all(MYSQLI_ASSOC);
}

?>