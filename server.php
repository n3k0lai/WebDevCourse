<?php

    //print 10 questions
    for($i = 0; $i < 10; $i = $i + 1){

        echo "<a href=\"#\" data-reveal-id=\"firstModal\" class=\"callout panel\">".
        "Modal in a modal&hellip;".
        "</a>";

        <!-- questionModal -->
        <div id="firstModal" class="reveal-modal" data-reveal>
          <h2>This is a modal.</h2>
          <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
          <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
          <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a></p>
          <a class="close-reveal-modal">&#215;</a>
        </div>


        <div id="secondModal" class="reveal-modal" data-reveal>
          <h2>This is a second modal.</h2>
          <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
          <a class="close-reveal-modal">&#215;</a>
        </div>

    }


?>