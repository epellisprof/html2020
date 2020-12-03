<?php
  include("p_funcoes.php");
  validar_sessao();
  include("p_cabecalho.php");
?>
<div class="container">
  <div class="row">
    <div class="col s12 m4 l8">
      <div class="card-panel teal darken-4">
        <span class="white-text">Utilizamos a função password_hash para gerar uma senha baseada em hash</span>
      </div>
      <div class="card-panel teal darken-4">
        <?php
        $hash = password_hash("1234567", PASSWORD_DEFAULT);;
        ?> 
        <span class="white-text">Senha 1234567: <?php echo $hash; ?></span>
      </div>
      <div class="card-panel teal darken-4">
        <span class="white-text">Utilizamos a função password_verify para verificar uma senha baseada em hash
          <pre>
          if (password_verify('1234', $hash)) {
              echo 'Password is valid!';
          } else {
              echo 'Invalid password.';
          }
        </pre>
        </span>
      </div>
    </div>
  </div>
</div>

<?php

// $hash = password_hash("123456", PASSWORD_DEFAULT);
// echo $hash . "<br>";
//echo password_hash("123456", PASSWORD_DEFAULT) , "<br>";

// if (password_verify('1234', $hash)) {
// echo 'Password is valid!';
// } else {
// echo 'Invalid password.';
// }

include("p_rodape.php");

?>