<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="validar.php" method="post">
    nome:<input type="text" name="nome" id=""><br>
    email:<input type="email" name="email" id=""><br>
    idade:<input type="number" name="idade" id=""><br>
    <input type="submit" name="enviar" value="Enviar">
</form>
<?php 
// print_r($_POST);
if (isset($_POST["enviar"])) {
    $erros = array();
    echo "<br>";
    //$vnome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
    $vnome = strlen($_POST["nome"]);
    if ($vnome < 5) {
        $erros[] = "Nome invalido!";
    }
    $vemail = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);           
    if (!$vemail) {
        $erros[] = "e-mail invalido!";
    }
    $vidade = filter_input(INPUT_POST,"idade", FILTER_VALIDATE_INT);
    if (!$vidade) {
        $erros[] = "Idade invalida!";
    }
    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo "$erro <br>";
        }
 }
 
    $nome = filter_input(INPUT_POST,"nome", FILTER_SANITIZE_STRING);
    echo "Dados enviados com sucesso!";
    echo "<br> Nome: " . $nome;
    echo "<br> Email: " . $_POST["email"];
    echo "<br> Idade: " . $_POST["idade"];
}
?>
</body>
</html>