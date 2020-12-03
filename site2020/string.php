<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //   echo strtolower("Teste"); // "teste"
    //   echo strtoupper("Teste"); // "TESTE"
    //   echo ucfirst("teste de funcao"); // "Teste de funcao"
    //   echo ucwords("teste de funcao"); // "Teste De Funcao"
    // echo "PAULO DA SILVA";
    // echo "<br>";
    // echo "Paulo da Silva";
    // echo "<br>";
    // $texto = "paulo DA silva";
    // //echo ucwords("$texto"); 
    // $texto=ucwords("$texto");  
    // echo str_replace(" DA "," da ", "$texto"); 
    
    $Url = "http://www.nome.com.br/Arquivo.ext";
    $vetor = explode("/", $Url);
    $arrayReverso = array_reverse($vetor);
    echo $arrayReverso[3];

    ?>
</body>
</html>