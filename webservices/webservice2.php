<?php

$cpf = $_REQUEST['cpf'];
$database = new mysqli('localhost','root','','work_now');



try
{
    $sql = "select * from tbl_contratantes where cpf='$cpf'";
    $result = $database -> query($sql);

    echo json_encode($result -> fetch_assoc());
}
catch (Exception $e)
{
    echo $e -> getMessage();
}

