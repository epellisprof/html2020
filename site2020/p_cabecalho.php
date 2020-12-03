<?php  
  //Inicia a sessão
  session_start();  
?>
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

    <nav>
    <div class="nav-wrapper">
      
        <a href="#" class="brand-logo center">Logo</a>
      
      <?php 
        //Verifica que está logado;
        usuario_logado();    
      ?>  
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="p_criptografia.php">Criptografia</a></li>
        <li><a href="p_componentes.php">Componentes</a></li>
        <li><a href="p_logout.php">Sair</a></li>
    </ul>
    </div>
  </nav>
