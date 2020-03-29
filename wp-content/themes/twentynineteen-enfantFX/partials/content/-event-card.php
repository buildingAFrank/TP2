<?php

$class='-main';


$authorImg=get_wp_user_avatar_src(get_the_author_meta('ID'),"original");

$excerpt = get_the_excerpt();
if(is_home()){
    $class='';
    $excerpt = substr($excerpt, 0, 75);
}else{
    $excerpt = substr($excerpt, 0, 125);
}
$result = substr($excerpt, 0, strrpos($excerpt, ' '));

$time= strtotime(get_field('date-evenement',$post->ID));

echo '
    <div class="event-card'.$class.'">
        <div class="eventTitleContainer'.$class.'">
            <h3 class="eventTitle">'.get_the_title().'</h3>
        </div>
        <div class="event-glance'.$class.'">
            <div class="host">
                <h4 class="host__title">Responsable</h4>
                <div class="host-visual">
                    <img src="'.$authorImg.'" alt="" class="host-visual__image">
                </div>
                <h6 class="host__name">
                '.get_the_author().'
                </h6>
            </div>
            <div class="info">
                <div class="info-date">
                    <h4 class="info-date__title">Date</h4>
                    <p class="info-date__date">'. (date('d/m',$time)) .'</p>
                </div>
                <div class="info-duration">
                    <h4 class="info-duration__title">Duree</h4>
                    <p class="info-duration__time">'.get_post_meta($post->ID, 'duree', true).'</p>
                </div>
            </div>
        </div>
        <div class="event-CTA'.$class.'">
            <p class="event-CTA__legend">
            '.$result.'[...]
            </p>
            <input type="button" value="Participer" class="event-CTA__button button__event button__tickets">
        </div>
    </div>'
;
