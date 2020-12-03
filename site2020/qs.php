<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="qs.php">Sem parametros</a><br>
    <a href="qs.php?sessao=1">Um parametro</a><br>
    <a href="qs.php?sessao=1&item=teste">Dois parametros</a><br>

    <?php 
        if (isset($_GET['sessao'])){
            $sessao = $_GET['sessao'];
            $item = (isset($_GET['item'])) ? $_GET['item'] : "Falso" ;
            echo "O valor da sessao é $sessao - item: $item";    
        }
    ?>

</body>
</html>