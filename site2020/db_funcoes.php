<?php 
function exibir_card($titulo, $conteudo, $contar){
    $contar = "#modal" . $contar;
?>
    
    <div class="col s12 m6 l3">
        <div class="card">
            <div class="card-image">
            <img src="http://lorempixel.com/640/480/cats">
            <span class="card-title"><?= $titulo ?></span>
            <a href="<?= $contar ?>" class="btn-floating halfway-fab waves-effect waves-light red modal-trigger"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
            <p><?= $conteudo ?></p>
            </div>
        </div>
    </div>
    <div id="<?= $contar ?>" class="modal">
        <div class="modal-content">
        <h4><?= $titulo ?></h4>
        <p><?= $conteudo ?></p>
        </div>
        <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>
<?php
}
?>