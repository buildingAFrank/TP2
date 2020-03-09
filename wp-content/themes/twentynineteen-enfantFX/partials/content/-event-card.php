<?php

// below text excerpt operations taken from https://developer.wordpress.org/reference/functions/get_the_excerpt/#comment-3320
$excerpt = get_the_excerpt();
$excerpt = substr($excerpt, 0, 25);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));

echo '
<div class="eventCard">
            <div class="eventTitleContainer">
                <h3 class="eventTitle">'.get_the_title().'</h3>
</div>

<div class="eventGlance">
    <div class="glanceLocation">
        <h4 class="eventHostTitle">Responsable</h4>
        <div class="eventVisual">
            <img src="https://placekitten.com/200/200" alt="" class="eventImage">
        </div>
        <h6 class="eventHostName">
            '.get_the_author().'
        </h6>
    </div>
    <div class="info">
        <div class="dateInfo">
            <h4 class="dateTitle">Date</h4>
            <p class="date">'. get_the_date() .'</p>
        </div>
        <div class="durationInfo">
            <h4 class="durationTitle">Duree</h4>
            <p class="durationTime">2 heures 30 min</p>
        </div>
    </div>
</div>
<div class="eventCTA">
    <p class="eventLegend">
        '.$result.'
    </p>
    <input type="button" value="Participer" class="button button__event button__tickets">
</div>
</div>';
