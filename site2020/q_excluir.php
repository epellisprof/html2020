<?php 
    if (isset($_GET['prod'])){
        $prod = $_GET['prod'];
        echo "O produto $prod excluido com sucesso";
        echo "<br><a href=q_index.php>Voltar pagina principal</a>";    
    }
?>