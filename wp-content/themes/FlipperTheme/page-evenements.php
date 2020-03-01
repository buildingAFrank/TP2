<?php

/* Template Name: evenements Page Template */

get_header();

?>

<div class="hero">
    <div class="hero__content">
        <h1 class="hero__title">Evenements</h1>
        <p class="hero__text">Notre calendrier affiche tous les evenements des 3 prochains mois a venir.
            La disponibilites des billets n'est pas garantie.
            premier arriver, premier servi.
            place limiter. Reservez des aujourd'hui</p>
        <!-- <input type="button" class="hero__cta" value="Call To Action"> -->
    </div>
</div>

<style>
    .eventCard{
        width:400px;height:400px;
        margin:15px;
        box-shadow: 0px 8px 10px 5px lightgrey;
        object-fit:contain;
        box-sizing:border-box;
    }
    .eventTitleContainer{
        background-color:limegreen;
        height:30px;
        width:100%;
    }
    .eventTitle{
        margin-left:10px;
        color:white;
        font-size:1.4em;
        line-height:1.4em;
        padding-left:5px;
    }
    .eventGlance{
        width:100%;
        display:flex;
        padding-top:10px;
    }

    .glanceLocation{
        flex:0 0 50%;
        text-align:center;
        box-sizing:border-box;
        padding:0 6.25%;
    }
    .eventVisual{
        width:150px;height:150px;
        object-fit:contain;
        box-sizing:border-box;
        overflow:hidden;
        border-radius:50%;
    }

    .eventImage{
        object-fit:contain;
        height:100%;
    }

    .info{
        flex:0 0 50%;
    }
    .dateInfo{
        padding-top:30px;
        text-align:center;
    }

    .durationInfo{
        padding-top:30px;
        text-align:center;
    }
    .eventLegend{
        padding-top:15px;
    }
    .eventCTA{
        width:100%;
        text-align:center;
    }
    .button{
        margin-top:10px;
    }

</style>

<div class="eventGrid">
    <div class="eventCard">
        <div class="eventTitleContainer">
            <h3 class="eventTitle">Montreal a table</h3>
        </div>

        <div class="eventGlance">
            <div class="glanceLocation">
                <h4 class="eventHostTitle">Responsable</h4>
                <div class="eventVisual">
                    <img src="https://placekitten.com/200/200" alt="" class="eventImage">
                </div>
                <h6 class="eventHostName">
                    Jean-Alexandre de la huitieme branche
                </h6>
            </div>
            <div class="info">
                <div class="dateInfo">
                    <h4 class="dateTitle">Date</h4>
                    <p class="date">6 juin 2020</p>
                </div>
                <div class="durationInfo">
                    <h4 class="durationTitle">Duree</h4>
                    <p class="durationTime">2 heures 30 min</p>
                </div>
            </div>
        </div>
        <div class="eventCTA">
            <p class="eventLegend">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, alias minima blanditiis, velit nemo harum quod porro sint magni delectus exercitationem ducimus amet cupiditate minus earum sequi corporis, autem possimus.
            </p>
            <input type="button" value="Billeterie" class="button button__event button__tickets">
        </div>
    </div>
</div>





<?php
get_footer();

?>
