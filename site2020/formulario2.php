<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
  function formulario(){
?>
<form action="formulario2.php" method="POST">
    <input name="nome" placeholder="nome" required>
    <br>
    <input name="end" placeholder="end" required>
    <br>
    <input type="submit" name="Enviar" value="Enviar"> 
</form>

<?php
  } 

function enviar(){
    if((isset($_POST['nome']))and (isset($_POST['end']))){
        $nome = $_POST['nome'];
        $end = $_POST['end'];
        echo "Nome: $nome <br> End: $end";
    }else{
        echo "Favor digitar o nome e end";
    }
    echo '<br> <a href="formulario2.php">Enviar Novamente</a>';
}

if (!array_key_exists("Enviar",$_POST)) {
    formulario(); 	// Exibir o formulário
}else {
    enviar();	// Enviar a consulta
}


?>

</body>
</html>