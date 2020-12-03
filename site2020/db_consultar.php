<?php 
require_once("db_conectar.php");

$sql = "SELECT * FROM usuarios LIMIT :qtd OFFSET :ini";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtd', 10, PDO::PARAM_INT);
$stmt->bindValue(':ini', 0, PDO::PARAM_INT);
if($stmt->execute()) {
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($resultado as $campo) {
    echo $campo['cod'] . " - " . $campo['nome']. '<br>';
    }    
} else {
    echo "Erro na consulta: " . $stmt->errorCode();
}
$conexao=null; // fechar conexão;
$stmt=null;
$resultado=null; 
?>