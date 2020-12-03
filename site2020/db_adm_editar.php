<?php 
  include("db_mz_funcoes.php");
  validar_sessao();
  usuario_logado();
?>
<!-- Exibir mensagem em javascript -->
<script>
    function mensagem(texto) {  
        alert(texto);    
        location.href='db_adm_listar.php';
    }
</script>
<?php 
require_once("db_conectar.php");

// Recebe o cod por GET e exibe o formulario;
$cod = filter_input(INPUT_GET, "cod",FILTER_SANITIZE_NUMBER_INT);

if (($cod >= 1) && (isset($cod))) {
    //Localizar registro no bd com base no codigo
    $sql = "SELECT * FROM admin WHERE cod = :cod";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':cod', $cod);

    if($stmt->execute()) {
        //Cria o formulario de edição de registros baseado no bd.
        $resultado = $stmt->fetchall(PDO::FETCH_ASSOC);
        if ($stmt->rowCount()) {
            foreach ($resultado as $campo) {
                $cod=$campo['cod'];
                $nome=$campo['nome'];
                $usuario=$campo['usuario'];
                ?>
                <form action="db_adm_editar.php" method="post">
                    <input type="hidden" name="cod" value="<?= $cod ?>">
                    Nome: <input type="text" name="nome" value="<?= $nome ?>"><br>
                    Usuario: <input type="text" name="usuario" value="<?= $usuario ?>"><br>
                    Senha: <input type="password" name="senha"><br>
                    <input type="submit" value="Atualizar" name="Atualizar">
                </form>
                <?php
            }
        }else{
            echo "<br>Registro nao encontrado!<br>";
        }
        echo '<a href="db_adm_listar.php">Exibir todos os resultados</a>';
    } else {
        echo "Erro: " . $stmt->errorCode();
    }    
}else {
    //Recever os valores por POST e realizar a atualização do registro
    $cod = filter_input(INPUT_POST, "cod",FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $usuario = filter_input(INPUT_POST, "usuario",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($senha) {
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "UPDATE admin SET nome = :nome, usuario = :usuario, senha = :senha WHERE cod = :cod";
    }else{
        $sql = "UPDATE admin SET nome = :nome, usuario = :usuario WHERE cod = :cod";
    }

    if (($nome) && ($usuario) && ($cod)) {
        require("db_conectar.php");
        //$sql = "UPDATE admin SET nome = :nome, usuario = :usuario, senha = :senha WHERE cod = :cod";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':cod', $cod);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':usuario', $usuario);
        if ($senha) {
            $stmt->bindValue(':senha', $senha);
        }
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