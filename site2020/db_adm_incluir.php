<?php 
  include("db_mz_funcoes.php");
  validar_sessao();
  usuario_logado();
?> 
<form action="db_adm_incluir.php" method="post">
    Nome: <input type="text" name="nome" required><br>
    Usuario: <input type="text" name="usuario" required><br>
    Senha: <input type="password" name="senha" required><br>
    <input type="submit" value="Enviar" name="enviar">
</form>
<?php 
    $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $usuario = filter_input(INPUT_POST, "usuario",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, "senha",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senha = password_hash($senha, PASSWORD_DEFAULT);;

    if (($nome) && ($usuario) && ($senha)) {
        require("db_conectar.php");
        $sql = "INSERT INTO admin (cod, nome, usuario, senha) VALUES (NULL, :nome, :usuario, :senha);";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':usuario', $usuario);
        $stmt->bindValue(':senha', $senha);
        if($stmt->execute()) {
            echo "Registro inserido com sucesso!<br>";
            echo "<a href=db_adm_listar.php>Voltar</a>";
        } else {
            echo "Erro: " . $stmt->errorCode();
        }    
    }    
?>