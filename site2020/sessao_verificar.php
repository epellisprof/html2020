<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['id'])) {
    $nome=$_SESSION['id'];
    echo "No outro arquivo foi digitado: $nome";
}else{
    echo "Nenhuma sessao gravada";
}
?>
<br><a href="sessao_inicio.php">Gravar sessao</a>";
<br><a href="sessao_excluir.php">Excluir a sessao</a>";

</body>
</html>