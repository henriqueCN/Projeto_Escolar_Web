<?php

$email = $_REQUEST['email'];
$database = new mysqli('localhost','root','','work_now');



try
{
    $sql = "select * from tbl_lista_negra where email='$email'";
    $result = $database -> query($sql);

    echo json_encode($result -> fetch_assoc());
}
catch (Exception $e)
{
    echo $e -> getMessage();
}

