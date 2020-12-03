<?php 
  include("db_mz_funcoes.php");
  validar_sessao();
  usuario_logado();
?>
<!-- Exibir mensagem em javascript -->
<script>
    function mensagem(texto) {  
        alert(texto);    
        location.href='db_completo.php';
    }
</script>
<?php 
require_once("db_conectar.php");

// Recebe o cod por GET e exibe o formulario;
$cod = filter_input(INPUT_GET, "cod",FILTER_SANITIZE_NUMBER_INT);

if (($cod >= 1) && (isset($cod))) {
    //Localizar registro no bd com base no codigo
    $sql = "SELECT * FROM usuarios WHERE cod = :cod";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':cod', $cod);

    if($stmt->execute()) {
        //Cria o formulario de edição de registros baseado no bd.
        $resultado = $stmt->fetchall(PDO::FETCH_ASSOC);
        if ($stmt->rowCount()) {
            foreach ($resultado as $campo) {
                $cod=$campo['cod'];
                $nome=$campo['nome'];
                $end=$campo['end'];
                $cat=$campo['cod_categoria']
                ?>
                <form action="db_editar.php" method="post">
                    <input type="hidden" name="cod" value="<?= $cod ?>">
                    Nome: <input type="text" name="nome" value="<?= $nome ?>"><br>
                    End: <input type="text" name="end" value="<?= $end ?>"><br>
                    Cat: <?php html_select_categoria($cat); ?><br>
                    <input type="submit" value="Atualizar" name="Atualizar">
                </form>
                <?php
            }
        }else{
            echo "<br>Registro nao encontrado!<br>";
        }
        echo '<a href="db_completo.php">Exibir todos os resultados</a>';
    } else {
        echo "Erro: " . $stmt->errorCode();
    }    
}else {
    //Recever os valores por POST e realizar a atualização do registro
    $cod = filter_input(INPUT_POST, "cod",FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $end = filter_input(INPUT_POST, "end",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cat = filter_input(INPUT_POST, "categoria",FILTER_SANITIZE_NUMBER_INT);

    if (($nome) && ($end) && ($cat) && ($cod)) {
        require("db_conectar.php");
        $sql = "UPDATE usuarios SET nome = :nome, end = :end, cod_categoria = :cat WHERE cod = :cod";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':cod', $cod);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':end', $end);
        $stmt->bindValue(':cat', $cat);
        if($stmt->execute()) {
        ?>
            <script>
                mensagem("Registro editado com sucesso!");
            </script>
        <?php
        } else {
        ?>
            <script>
                mensagem("Erro ao editar o registro!");
            </script>
        <?php
        }    
    }    
}
?>