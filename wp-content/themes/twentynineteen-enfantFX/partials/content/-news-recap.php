<?php

// below text excerpt operations taken from https://developer.wordpress.org/reference/functions/get_the_excerpt/#comment-3320
$excerpt = get_the_excerpt();
$excerpt = substr($excerpt, 0, 260);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));




echo '<div class="recap">
            <h3 class="recapTitle">'.get_the_title().'</h3>
            <h4 class="auteur">'.get_the_author().'</h4>
            <h6 class="recapDate">'.get_the_date().'</h6>
            
            <p class="recapText">'.$result.'<a href="'.get_permalink( get_option( 'page_for_posts' ) ).'" class="textLink">[...]</a></p>
            <a href="'.get_permalink( get_option( 'page_for_posts' ) ).'" class="newsLink">Read More...</a>
        </div>';