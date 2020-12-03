
<?php 
    include("db_mz_funcoes.php");
    validar_sessao(); 
?>

<script>
    function mensagem(texto) {  
        alert(texto);    
        location.href='db_completo.php';
    }
</script>
<?php 
require_once("db_conectar.php");

$cod = filter_input(INPUT_GET, "cod",FILTER_SANITIZE_NUMBER_INT);

if ($cod >=1) {
    $sql = "DELETE FROM usuarios WHERE cod = :cod";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':cod', $cod);
    if($stmt->execute()) {
        ?>
            <script>
                mensagem("Registro excluido com sucesso!");
            </script>
        <?php
    } else {
        ?>
            <script>
                mensagem("Erro ao excluir o registro");
            </script>
        <?php
    }    
}else {
    echo "Codigo invalido";
}