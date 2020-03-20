<?php

$progHeure=get_post_field('post_name');
$progHeure=substr($progHeure, strrpos($progHeure,'-')+1);
$gridCol=get_the_author_meta( 'ID', $post->post_author )-1;

$span=2;
$gridRow=$progHeure-6;
if($gridRow==2 || $gridRow==7){
    if($gridRow==2){
        echo"<div class='atelier-formateur-title' style='grid-column: ".$gridCol."/span 1;grid-row:1/span 1;'><h2 style='background-color:red;'>".get_the_author_meta( 'display_name', $post->post_author )."</h2></div>";
    }
    if($gridRow==7){
        echo"<div class='atelier-lunch' style='grid-column: ".$gridCol."/span 1;grid-row:6/span 1;'><h2 style='background-color:green;'>Lunch</h2></div>";
    }
}


echo "<div class=\"atelier\" style='grid-column: ".$gridCol."/span 1;grid-row:".$gridRow."/ span ".$span.";'>
            
            <div class=\"atelier-info\">";

            echo"    <h5>".get_the_title()."</h5>
                <p class=\"atelier-heure\">".get_post_field('post_name')."</p>
                <p class='atelier-author'>".get_the_author_meta( 'display_name', $post->post_author )."</p>
            </div>
        </div>";
