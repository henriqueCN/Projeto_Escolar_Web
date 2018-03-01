<?php

$categoria = $_REQUEST['categoria'];
$database = new mysqli('localhost','root',"",'work_now');

try{
    $sql = "select * from tbl_trabalhadores where categoria_trabalho='$categoria'";
    $result = $database -> query($sql);

    echo json_encode($result -> fetch_assoc());
}
catch (Exception $e)
{
    echo $e -> getMessage();
	
}