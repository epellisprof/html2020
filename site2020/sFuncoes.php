<?php  
    // Verificar se o usuario efetuou o login
    function validar_sessao(){
        session_start();
        if (!isset($_SESSION['id'])) {
            if (!isset($_POST['id'])) {
                ?>
                <form method="POST" action="#">
                    Nome:<input name="id"> <input type="submit" value="GO">
                </form>
                <?php
                exit;
            } else {
                $_SESSION['id'] = $_POST['id'];
                echo "Foi gravado na sessao: " . $_SESSION['id'];
            }
        }
    }
    function sair_sessao (){
        session_start();
        session_destroy();
    }
?>