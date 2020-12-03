<?php 
    $DB_HOST="localhost";
    $DB_NAME='site';
    $DB_USER='root';
    $DB_PASS='123456';
      
    $DSN = "mysql:host=$DB_HOST;dbname=$DB_NAME";
  
    try {
      $conexao = new PDO($DSN, $DB_USER, $DB_PASS);
  
    } catch (PDOException $e) {
        echo "<br>Erro: " . $e -> getCode();
        echo "<br>Msg:  " . $e -> getMessage();
    }; 
?>