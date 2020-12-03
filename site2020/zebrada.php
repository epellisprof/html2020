<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Documento</title>
    <style>
        .par {
            color:brown;
        }
        .impar {
            color:darkblue;
        }
    </style>
</head>
<body>
<?php 
  for ($num=1; $num <= 15; $num++){
  //echo "Número: $num <br>";
    if ($num % 2 == 0) {
        $classe = "par";
    }else{
        $classe = "impar";
    }
    echo "<h3 class=\"$classe\">$num</h3>";
  } 
  
?>


</body>
</html>