<?php
//incluir o cabecalho
include("p_funcoes.php");
include("p_cabecalho.php");

//Verificar se o cookie foi setado
if (isset($_COOKIE["usuario"])) {
    $_SESSION["usuario"] = $_COOKIE["usuario"];
    $_SESSION["nome"] = $_COOKIE["nome"];
}

//Se o usuario estiver logado, vai para a home
if (isset($_SESSION["usuario"])) {
    header("Location: p_home.php");
}


//Limpeza dos caracteres especiais;
$usuario = filter_input(INPUT_POST, "usuario",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, "senha",FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (($usuario)&&($senha)){
    //Base de usuario (depois vem o banco de dados);
    $db = [
        [
            "nome" => "Mario da silva",
            "usuario" => "mario",
            //senha 1234
            "senha" => '$2y$10$8qtCnWnGtwk6nTnF6cxLZuSQdFRKlxCeKYRcSn80C6virMJX8Za.6', 
        ],
        [
            "nome" => "Pedro Paulo",
            "usuario" => "pedro",
            //senha 123456
            "senha" => '$2y$10$tyuXGdFOTQtkPnU1solDm.NEC.DehELUlBPPmItJk8DhAbQGX/1bG', 
        ],
    ];
    
    //print_r($db);

    foreach ($db as $usuarios) {
        $usuario_valido = $usuario === $usuarios["usuario"];
        $senha_valida = password_verify($senha, $usuarios["senha"]);
        
        if (($usuario_valido) && ($senha_valida)){
            $_SESSION["erros"] = null;
            $_SESSION["nome"] = $usuarios["nome"];
            $_SESSION["usuario"] = $usuarios["usuario"];
            
            //Expiração do cookie em 30 dias
            $expiracao_cookie = time() + 86400 * 30;
            
            //Setar o cookie
            setcookie("usuario", $usuarios["usuario"], $expiracao_cookie);
            setcookie("nome", $usuarios["nome"], $expiracao_cookie);
            
            //Redireciona para a home
            header("Location: p_home.php"); 
        }
    }
    //Se tiver erros adiciona no array de erros
    if (!isset($_SESSION["usuario"])) {
        $_SESSION["erros"]= "Usuario ou senha invalido";
    }
}
?>

<div class="container">
    
<?php
//Exibe os erros
if (isset($_SESSION["erros"])) {
    ?>        
        <div class="card-panel red lighten-2"><?= $_SESSION["erros"]; ?></div>
    <?php    
    //Limpa os erros apos exibir os mesmos
    $_SESSION["erros"] = null;
}
?>
        
    <form action="p_login.php" method="post">
    <div class="row">
        <div class="input-field col s12 m4 l6">
            <input name="usuario" id="usuario" type="text" class="validate" required>
            <label for="usuario">Usuário</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m4 l6">
            <input name="senha" id="password" type="password" class="validate" required>
            <label for="password">Senha</label>
        </div>
    </div> 
    <div class="row">
        <div class="col s12 m4 l6">
            <button class="btn waves-effect waves-light" type="submit" name="action" value="enviar">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</div>
</form>
<?php
//incluir os rodapes
include("p_rodape.php");
?>