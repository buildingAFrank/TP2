<?php

 $gridCol=get_the_date('m') % 3;
 $gridRow=get_the_date('j');

echo "<div class=\"eventDay\" style='grid-column: ".($gridCol+1)."/span 1;grid-row:".$gridRow."/ span 1;'>
            
            <div class=\"eventInfoCard\">
                <a href='' class='eventLink'>".get_the_title()."</a>
                <p class=\"eventDate\">".get_the_date()."</p>
                <p class='grid-pos'>Position(".$gridCol."/span 1 -- ".$gridRow."/span 1)";



            echo the_field('date_evenement')."</p>
            </div>
        </div>";