
<html>

<head>

</head>

<body>
<form action = "crud.php" method = "post">

id <input type = "text" name = "id">
<input type = "submit" value = "Excluir" name = "Excluir">

</form>
</body>
</html>

<?php
if(isset($_POST['Excluir']))
{
$id = $_POST['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work_now";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM tbl_contratantes WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
}
?>
