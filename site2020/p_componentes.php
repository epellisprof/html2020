<?php
  include("p_funcoes.php");
  validar_sessao();
  include("p_cabecalho.php");

?> 

<div class="carousel">
  <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1" alt=""></a>
  <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2" alt=""></a>
  <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3" alt=""></a>
  <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4" alt=""></a>
  <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5" alt=""></a>
</div>

<?php
  include("p_rodape.php");
?>
  <script>
  $(document).ready(function(){
    $('.carousel').carousel();
  });
  </script>