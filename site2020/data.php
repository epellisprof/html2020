<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //   $data = date("j/m/Y");
    //   $hora = date("H:i:s");
    //   echo ("Data: $data");
    //   echo ("Hora: $hora");
    //   echo date("j/m/Y \- H:i:s");
    // $data= date('d/m/Y H:i');
    // echo $data . "<br>";
    // echo date_default_timezone_get() . "<br>";
   date_default_timezone_set('Brazil/East');
    // $data= date('d/m/Y H:i');
    // echo $data;
    // echo "<br>";
    // $atual = filemtime("data.php");
    // echo "Última atualização: ";
    // echo date("d/m/Y H:i", $atual);
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');
    $semana = date('w');
    switch ($mes){
        case 1: $mes = "JANEIRO"; break;
        case 2: $mes = "FEVEREIRO"; break;
        case 3: $mes = "MARÇO"; break;
        case 4: $mes = "ABRIL"; break;
        case 5: $mes = "MAIO"; break;
        case 6: $mes = "JUNHO"; break;
        case 7: $mes = "JULHO"; break;
        case 8: $mes = "AGOSTO"; break;
        case 9: $mes = "SETEMBRO"; break;
        case 10: $mes = "OUTUBRO"; break;
        case 11: $mes = "NOVEMBRO"; break;
        case 12: $mes = "DEZEMBRO"; break;
        }
    // configuração semana
    switch ($semana) {
        case 0: $semana = "DOMINGO"; break;
        case 1: $semana = "SEGUNDA FEIRA"; break;
        case 2: $semana = "TERÇA-FEIRA"; break;
        case 3: $semana = "QUARTA-FEIRA"; break;
        case 4: $semana = "QUINTA-FEIRA"; break;
        case 5: $semana = "SEXTA-FEIRA"; break;
        case 6: $semana = "SÁBADO"; break;
    }
    //Agora basta imprimir na tela...
    echo ("$semana, $dia DE $mes DE $ano");
    
    ?>
</body>
</html>