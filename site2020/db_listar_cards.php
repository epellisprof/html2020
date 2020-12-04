  <!DOCTYPE html>
  <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>

        <!-- Google Icon Font -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- materialize.css -->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!-- CSS Customizado -->
        <link rel="stylesheet" href="css/customizado.css">
        
        <!-- viewport para mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <?php 
    require_once("db_conectar.php");
    require_once("db_funcoes.php");

    $sql = "SELECT * FROM usuarios LIMIT :qtd OFFSET :ini";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':qtd', 10, PDO::PARAM_INT);
    $stmt->bindValue(':ini', 0, PDO::PARAM_INT);
    if($stmt->execute()) {
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="row">
        <?php
        foreach ($resultado as $campo) {
        // echo $campo['cod'] . " - " . $campo['nome']. '<br>';
        exibir_card($campo['nome'], $campo['nome'], $campo['cod'] );
    }
    ?>
    </div>
    <?php    
    } else {
        echo "Erro na consulta: " . $stmt->errorCode();
    }
    $conexao=null; // fechar conexão;
    $stmt=null;
    $resultado=null; 
    ?>
        <!-- JavaScript no final do body para otimizar o carregamento -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">
        </script>      
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.modal').modal();
            });
        </script>
    </body>
  </html>