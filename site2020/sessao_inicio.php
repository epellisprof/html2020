<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if (!isset($_POST['id'])) {
        ?>
        <form method="POST" action="sessao_inicio.php">
            Nome:<input name="id"> <input type="submit" value="GO">
        </form>
        <?php
    }else{
        $_SESSION['id'] = $_POST['id'];
        echo "Foi gravado na sessao: " . $_SESSION['id'];}        
    ?>
<br><a href="sessao_verificar.php"> Verificar no outro arquivo</a>
<br><a href="sessao_excluir.php"> Excluir a sessao</a>
</body>
</html>