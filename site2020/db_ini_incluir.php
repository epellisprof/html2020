<?php 
  include("db_mz_funcoes.php");
?> 
<form action="db_incluir.php" method="post">
    Nome: <input type="text" name="nome"><br>
    End: <input type="text" name="end"><br>
    Cat: <?php html_select_categoria(0); ?><br>
    <input type="submit" value="Enviar" name="enviar">
</form>
<?php 
    $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $end = filter_input(INPUT_POST, "end",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cat = filter_input(INPUT_POST, "categoria",FILTER_SANITIZE_NUMBER_INT);

    if (($nome) && ($end) && ($cat)) {
        require("db_conectar.php");
        $sql = "INSERT INTO usuarios (cod, nome, end, cod_categoria) VALUES (NULL, :nome, :end, :cat);";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':end', $end);
        $stmt->bindValue(':cat', $cat);
        if($stmt->execute()) {
            echo "Registro inserido com sucesso!<br>";
            echo "<a href=db_procurar.php>Voltar</a>";
        } else {
            echo "Erro: " . $stmt->errorCode();
        }    
    }    
?>