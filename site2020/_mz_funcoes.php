<?php function exibir_card($nome, $endereco){ ?>
    <div class="col s12 m4 l3">
      <div class="card">
        <div class="card-image">
          <img src="http://lorempixel.com/640/480/transport">
          <span clas="card-title"><?= $nome ?></span>
        </div>
        <div class="card-content">
          <p><?= $endereco ?></p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
<?php } ?>

<?php 
  function cards_principal(){
    require("db_conectar.php");

    $cat = filter_input(INPUT_GET, "cat",FILTER_SANITIZE_NUMBER_INT);
    
    if ($cat >= 1){
      $sql = "SELECT * FROM usuarios WHERE cod_categoria = :cat LIMIT :qtd OFFSET :ini";
      $stmt = $conexao->prepare($sql);
      $stmt->bindValue(':cat', $cat, PDO::PARAM_INT);
    }else{
      $sql = "SELECT * FROM usuarios LIMIT :qtd OFFSET :ini";
      $stmt = $conexao->prepare($sql);
    }
    $stmt->bindValue(':qtd', 10, PDO::PARAM_INT);
    $stmt->bindValue(':ini', 0, PDO::PARAM_INT);

    if($stmt->execute()) {
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<div class="container">';
        echo '<div class="row">';
        foreach ($resultado as $campo) {
            exibir_card($campo['nome'], $campo['end']);
        }
        echo "</div>";
        echo "</div>";
    } else {
        echo "Erro na consulta: " . $stmt->errorCode();
    }
    
    $conexao=null; // fechar conexão;
    $stmt=null;
    $resultado=null;
  }
   
  function html_select_categoria($valor_padrao){
    require("db_conectar.php");
    $sql = "SELECT * FROM categoria LIMIT :qtd OFFSET :ini";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':qtd', 10, PDO::PARAM_INT);
    $stmt->bindValue(':ini', 0, PDO::PARAM_INT);
    
    if($stmt->execute()) {
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<select name=\"categoria\">";
        echo "<option value=\"\">Selecionar</option>";          
        foreach ($resultado as $campo) {
          $cod = $campo['cod'];
          $categoria = $campo['categoria'];
          if ($cod == $valor_padrao){
            echo "<option value=\"$cod\" selected>$categoria</option>";  
          }else{
            echo "<option value=\"$cod\">$categoria</option>";  
          }
        }
        echo "</select>";
    } else {
        echo "Erro na consulta: " . $stmt->errorCode();
    }
      //$conexao=null; // fechar conexão; 
      $stmt=null;
      $resultado=null;
  }
  //add para o login
  function validar_sessao(){
    if (isset($_COOKIE["usuario"])) {
        $_SESSION["usuario"] = $_COOKIE["usuario"];
        $_SESSION["nome"] = $_COOKIE["nome"];
    }
    if (!isset($_SESSION["usuario"])) {
        $_SESSION["erros"]= "Favor efetuar o login";
        echo    "<script>
            document.location=\"db_login.php\";
        </script>";
        exit;
    }
  }

  //Exibir o usuario logado
  function usuario_logado (){
      if (isset($_COOKIE["usuario"])) {
          $_SESSION["usuario"] = $_COOKIE["usuario"];
          $_SESSION["nome"] = $_COOKIE["nome"];
      }
      if (isset($_SESSION["usuario"])) {
          echo "<h3>Usuario: " . $_SESSION["nome"];
          echo " (<a href=db_logout.php>Sair</a>)</h3>";
      }
  }
?>