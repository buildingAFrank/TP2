<?php
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
        '.get_the_excerpt().'
    </p>
    <input type="button" value="Participer" class="button button__event button__tickets">
</div>
</div>';
