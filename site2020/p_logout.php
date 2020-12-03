<?php
  include("p_funcoes.php");
  validar_sessao();
  include("p_cabecalho.php");

    //Matar a sessao
    session_destroy();
     
    //matar o cookie
    unset($_COOKIE["usuario"]);
    setcookie("usuario",'');
    unset($_COOKIE["nome"]);
    setcookie("nome",'');

    //redirecionar para o login
    header("Location: p_login.php");
?>