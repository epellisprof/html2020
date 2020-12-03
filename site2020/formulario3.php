<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formulario3.php" method="post">
        <input name="nome" placeholder="Nome" required><br>
        <input type="date" name="data" placeholder="Data Aniversário" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php 
      if ((isset($_POST["nome"])) && (isset($_POST["data"]))) {
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST,"data", FILTER_SANITIZE_STRING);
        //$data = $_POST["data"];
        //echo "$nome - $data";
        date_default_timezone_set('Brazil/East');
        
        // $data_atual= date('d-m-Y');
        // $data_nasc = date($data);
        // echo "$data_atual - $data_nasc";
        $database = date_create($data);
        $datadehoje = date_create();
        $resultado = date_diff($database, $datadehoje);
        echo $nome . " voce tem ". date_interval_format($resultado, '%y') . " anos ";

      }
    ?>
</body>
</html>

