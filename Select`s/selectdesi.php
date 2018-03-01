  <div class="w3-container w3-text-grey">
    <h1>Trabalhadores:</h1>
  </div>
<?php
$con = new mysqli('localhost','root','','work_now');
$sql = "SELECT * FROM tbl_trabalhadores WHERE categoria_trabalho= 'designer';";
$result = $con->query($sql);
if($result->num_rows > 0){
    $dados = $result->fetch_all(MYSQLI_ASSOC);
}
else{
	echo "Esta Tabela está vazia";
}
?>
  <!-- Product grid -->
  <div class="w3-row">
  <?php foreach ($dados as $user) : ?>
    <div class="w3-col l3 s6">
      <div class="w3-container">
        
        <p><?php echo $user['nome']; ?></p>
      </div>
	  </div>

<?php endforeach; ?>
   
  </div>