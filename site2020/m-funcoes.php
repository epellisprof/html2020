<?php 
  function criar_card($titulo){
      echo "<article class=\"col s12 m6 l4\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <img src=\"http://lorempixel.com/640/480/technics\">
                    <span class=\"card-title\">$titulo</span>
                </div>
                <div class=\"card-content\">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class=\"card-action\">
                    <a href=\"#\">This is a link</a>
                </div>
            </div>
        </article>
";
  } 
?>