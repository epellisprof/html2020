<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Documento</title>
</head>
<body>
<form action="formulario.php" method="POST">
    <input name="nome" placeholder="nome" required>
    <br>
    <input name="end" placeholder="end" required>
    <br>
    <input type="submit" name="Enviar" value="Enviar"> 
</form>
<?php 
  
  if((isset($_POST['nome']))and (isset($_POST['end']))){
    $nome = $_POST['nome'];
    $end = $_POST['end'];
    echo "Nome: $nome <br> End: $end";
  }else{
    echo "Favor digitar o nome e end";
  }
?>
</body>
</html>