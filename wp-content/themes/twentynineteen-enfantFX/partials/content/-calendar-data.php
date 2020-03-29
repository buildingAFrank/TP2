<?php
$time= strtotime(get_field('date-evenement',$post->ID));
 $gridCol=date('m',$time) % 3;
 $gridRow=date('j',$time);

echo "<div class=\"eventDay\" style='grid-column: ".($gridCol)."/span 1;grid-row:".$gridRow."/ span 1;'>
            
            
            
            <div class=\"eventInfoCard\">
                <a href='".get_permalink( get_option( 'page_for_posts' ) )." class='eventLink'>".get_the_title()."</a>
                <p class=\"eventDate\">".date('j/ m',$time)."</p>
                <p class='grid-pos'>Position(".$gridCol."/span 1 -- ".$gridRow."/span 1)";



            echo "</p>
            </div>
        </div>";