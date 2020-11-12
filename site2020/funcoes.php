<?php 
//   function cabecalho($cab, $texto){
//     echo "<h$cab> $texto </h$cab>";
//   } 
//   cabecalho(3, "Meu primeiro cabecalho");
//   cabecalho(1, "Meu segundo cabecalho");

  $x=1;
  function soma(){
    global $x;  
    $x = 2;
      echo $x;
  }
  soma();
  echo $x;
?>