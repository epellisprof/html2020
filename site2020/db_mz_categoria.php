<?php
require("inc_cabecalho.php");
require("db_conectar.php");
require("db_mz_funcoes.php");
?>

<div class="container">
    <div class="row">
        <div class="col s12 m3">
            <aside>
                <div class="collection">
                    <?php 
                        include("db_mz_menulateral.php");
                    ?>    
                </div>
            </aside>
        </div>
        <div class="col s12 m9">
            <section class="row">
                <?php cards_principal(); ?>
            </section>
        </div>
    </div>
</div>

<?php
require("inc_rodape.php");
?>