<form action="db_procurar.php" method="post">
    Nome: <input type="text" name="nome">
    <input type="submit" value="Enviar" name="enviar">
</form>

<br>
<a href="db_incluir.php">[Inserir novo registro]</a>
<br>
<?php 
require_once("db_conectar.php");

$nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($nome) {
    $sql = "SELECT * FROM usuarios WHERE nome LIKE :nome";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':nome', '%' . $nome . '%');
}else {
    $sql = "SELECT * FROM usuarios LIMIT :qtd OFFSET :ini";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':qtd', 10, PDO::PARAM_INT);
    $stmt->bindValue(':ini', 0, PDO::PARAM_INT);
}
if($stmt->execute()) {
    $resultado = $stmt->fetchall(PDO::FETCH_ASSOC);
    if ($stmt->rowCount()) {
        foreach ($resultado as $campo) {
            echo $campo['cod'] . " - " . $campo['nome'];
            echo " <a href=db_detalhes.php?cod=". $campo['cod'] . "> [Detalhe]</a><br>"; 
        }
    }else{
        echo "<br>Registro nao encontrado!<br>";
        echo '<a href="db_procurar.php">Exibir todos os resultados</a>';
    }
} else {
    echo "Erro: " . $stmt->errorCode();
}
