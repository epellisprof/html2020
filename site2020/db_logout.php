<?php
  include("db_mz_funcoes.php");
  validar_sessao();

    //Matar a sessao
    session_destroy();
    
    //matar o cookie
    unset($_COOKIE["usuario"]);
    setcookie("usuario",'');
    unset($_COOKIE["nome"]);
    setcookie("nome",'');

    //redirecionar para o login
    header("Location: db_login.php");
?>