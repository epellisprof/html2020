<?php 
  require("m-cabecalho.php");
  require("m-funcoes.php"); 
?>
            <div class="col s12 m9">
                <section class="row">
                <?php 
                    criar_card("primeiro"); 
                    criar_card("segundo");
                    criar_card("terceiro");
                    criar_card("quarto");  
                ?>
                </section>
            </div>
        </div>
    </div>

<?php 
  require("m-rodape.php"); 
?>