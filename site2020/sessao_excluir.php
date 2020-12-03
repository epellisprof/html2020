<?php
  session_start();
  session_destroy();
?>
A sessão foi excluída, pode verificar!
<br><a href="sessao_verificar.php">Verificar no outro arquivo</a>
<br><a href="sessao_inicio.php"> Gravar sessao!</a>