<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      function formatar($texto){
        echo "<strong><i><u>$texto</u></i></strong>";
      } 
    ?>

<h2>teste</h2>
<?php formatar("Meu primeiro texto"); ?>
<h2>teste</h2>
<?php formatar("teste e testes"); ?>



</body>


</html>