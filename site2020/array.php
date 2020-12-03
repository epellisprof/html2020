<?php 
  $nomes[0]="Paulo";
  $nomes[1]="Mario";
  $nomes[2]="Marta";
  $nomes[3]="Ana";
  
  echo "Meu nome é $nomes[2]." ;
  //add novo item
  //$nomes[]="nome"; 

  //Exibir o array
  echo print_r($nomes);
  echo var_dump($nomes);
  
  //Pesquisar informações dentro do array
  echo array_search("Mario",$nomes);

?>