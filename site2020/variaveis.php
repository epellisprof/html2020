<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $nome="Emerson";
      $numero=10.4;
      $Numero="10.4";
      echo "Meu nome é $nome";
      echo 'Meu nome é $nome';
    ?>
<h3>testes</h3>
<h3>testes</h3>
<h3>testes</h3>
<?php 
  echo "$nome"; 
?>
<h3>testes</h3>
<?= 
  "meu nome é $nome"; 
?>

<?php 
  echo $_SERVER['PHP_SELF']; 
  echo $_SERVER['SERVER_NAME'];
  //echo $_SERVER['REMOTE_HOST'];   
?>

</body>
</html>