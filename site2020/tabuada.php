<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
      function tabuada($n){
        for ($num=0; $num <= 10; $num++){
            //echo "Número: $num <br>";
              if ($num % 2 == 0) {
                  $classe = "par";
              }else{
                  $classe = "impar";
              }
              echo "<h3 class=\"$classe\"> $n x $num = " . $n * $num . "</h3>";
            } 
      }
      
      tabuada(3);
      tabuada(5);
    ?>
</body>
</html>
