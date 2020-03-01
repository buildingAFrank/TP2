<?php
/*Front page Template */

get_header();
?>

<div class="hero">
    <div class="hero__content">
        <h1 class="hero__title">Hero Banner Title</h1>
        <p class="hero__text">Hero Banner Text</p>
        <input type="button" class="hero__cta" value="Call To Action">
    </div>
</div>
<section class="newsRecap">
    <h2 class="recapHeader">Latest News</h2>
    <div class="recapContainer">
        <div class="recap">
            <h3 class="recapTitle">Recent news</h3>
            <p class="recapText">This is a recap of one of the recent news from the news categorie of this website</p>
            <a href="" class="newsLink">Read More...</a>
        </div>
        <div class="recap">
            <h3 class="recapTitle">Recent news</h3>
            <p class="recapText">This is a recap of one of the recent news from the news categorie of this website</p>
            <a href="" class="newsLink">Read More...</a>
        </div>
        <div class="recap">
            <h3 class="recapTitle">Recent news</h3>
            <p class="recapText">This is a recap of one of the recent news from the news categorie of this website</p>
            <a href="" class="newsLink">Read More...</a>
        </div>
    </div>

</section>

<section class="nextEvents">
    <div class="event">
        <p class="eventDate">Next event on:</p>
        <div class="eventInfoCard">
            <img src="https://placekitten.com/75/75" alt="" class="eventImage">
            <p class="eventDetails">This is going to be the best event of your life, trust me. This is going to be the best event of your life. This is going to be the best event of your life. This is going to be the best event of your life. This is going to be the best event of your life. This is going to be the best event of your life. </p>
        </div>
    </div><div class="event">
        <p class="eventDate">Next event on:</p>
        <div class="eventInfoCard">
            <img src="https://placekitten.com/75/75" alt="" class="eventImage">
            <p class="eventDetails">This is going to be the best event of your life</p>
        </div>
    </div>
    <div class="event">
        <p class="eventDate">Next event on:</p>
        <div class="eventInfoCard">
            <img src="https://placekitten.com/75/75" alt="" class="eventImage">
            <p class="eventDetails">This is going to be the best event of your life</p>
        </div>
    </div>
</section>
    <?php
/*Front page Template End */

get_footer();
?>
