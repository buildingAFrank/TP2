<?php

echo '<div class="recap">
            <h3 class="recapTitle">'.get_the_title().'</h3>
            <h4 class="auteur">'.get_the_author().'</h4>
            <h6 class="recapDate">'.get_the_date().'</h6>
            
            <p class="recapText">'.get_the_excerpt().'</p>
            <a href="'.get_permalink( get_option( 'page_for_posts' ) ).'" class="newsLink">Read More...</a>
        </div>';