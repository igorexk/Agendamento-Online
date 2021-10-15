<?php
include('login\php\verifica_login.php');
?>

<h2>Ola, 

	<?php echo $_SESSION['usuario'];?>

</h2>

<h2>

	<a href="login\php\logout.php">Sair</a>

</h2>
