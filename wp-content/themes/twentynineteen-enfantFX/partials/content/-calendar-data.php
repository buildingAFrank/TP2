<?php
$time= strtotime(get_field('date-evenement'));
 $gridCol=date('m',$time) % 3;
($gridCol==0)?$gridCol=4:$gridCol+1;
 $gridRow=date('j',$time);

 $dateToFormat = get_field('date-evenement');

$gridWeekRow=(date('W',$time)-date('W'))+$gridCol;
$gridDayCol= date('N',$time);

setlocale(LC_TIME, "fr_FR");



echo "<div class=\"eventDay\" style='grid-column: ".$gridDayCol."/span 1;grid-row:".$gridWeekRow."/ span 1;' id='".$post->ID."'>

            <div class=\"eventInfoCard\">
                <a href='".get_permalink( get_option( 'page_for_posts' ) )."' class='eventLink'>".get_the_title()."</a>
                <p class=\"eventDate\">".strftime('%d %B',$time)."</p>
            </div>
            <div class=\"eventCardOver\"></div>
        </div>";