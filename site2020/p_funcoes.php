<?php  
    // Verificar se o usuario efetuou o login
    function validar_sessao(){
        if (isset($_COOKIE["usuario"])) {
            $_SESSION["usuario"] = $_COOKIE["usuario"];
            $_SESSION["nome"] = $_COOKIE["nome"];
        } 
        if (!isset($_SESSION["usuario"])) {
            $_SESSION["erros"]= "Favor efetuar o login";
            echo    "<script>
                document.location=\"p_login.php\";
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
            $retorno = $_SESSION["nome"];
        } else {
            $retorno = "Anônimo";
        }
        echo $retorno;
    }

?>