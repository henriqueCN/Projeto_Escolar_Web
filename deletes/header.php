<nav id="nav"class="navbar navbar-inverse navbar-fixed-top " style="font-color:#FFA500">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#FFA500"href="../index.php">Work Now</a>
    </div>
    <ul class="nav navbar-nav">

<form method = "" action = "">
	  <li  name = "logout" class="navbar-right"style="margin-left:1060px; margin-top:14px;"><a href="../index.php" style="color:#FFA500">Logout</a></li>
</form>
    </ul>
  </div>
</nav>

<?php 
if(isset($_POST['logout'])){
session_destroy($_SESSION['mail']);
session_destroy($_SESSION['pass']);
}
?>