
<?php 
  include("db_mz_funcoes.php");
  validar_sessao();
  usuario_logado();
?>  

<!-- Faz a validação se podemos excluir o registro -->
<script>
    function del(cod) {  
        if (confirm('Excluir a registro?')) {  
            location.href='db_adm_excluir.php?cod=' + cod;
        }
    }
</script>

<?php 


echo '<br><a href="db_adm_incluir.php">[Novo Admin]</a> <br>';

require_once("db_conectar.php");

$sql = "SELECT * FROM admin LIMIT :qtd OFFSET :ini";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtd', 10, PDO::PARAM_INT);
$stmt->bindValue(':ini', 0, PDO::PARAM_INT);

if($stmt->execute()) {
    $resultado = $stmt->fetchall(PDO::FETCH_ASSOC);
    foreach ($resultado as $campo) {
        $cod = $campo['cod'];
        $nome = $campo['nome'];
        $usuario = $campo['usuario'];
        echo "$cod - $nome - $usuario";
        echo " <a href=db_adm_editar.php?cod=$cod> [Editar]</a>";
        echo " <a href=\"#\" onclick=\"del(${cod})\"> [Excluir]</a> <br>";
    }
} else {
    echo "Erro: " . $stmt->errorCode();
}
