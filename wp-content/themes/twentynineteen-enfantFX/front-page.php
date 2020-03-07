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

<main class="main-content">

        <?php
        //start the loop
        $args=array(
                'category_name' => 'evenement',
                'posts_per_page'=> 3,
                'orderby'=>'date',
                'order'=>'DESC'
        );
        $query1= new WP_Query($args);
        if($query1->have_posts()){
    echo '<section>
        <h2>prochains evenements</h2>
        <div class="eventGrid">';
            while ($query1->have_posts()):
                $query1->the_post();
                get_template_part('partials/content/','event-card');
            endwhile;
            wp_reset_query();

        }
        echo ' </div>
            </section>';

        ?>


<section class="newsRecap">

    <h2 class="recapHeader">Dernieres Nouvelles</h2>
    <div class="recapContainer">
        <?php
        //start the loop
        $args=array(
            'category_name' => 'nouvelle',
            'posts_per_page'=> 3
        );
        $query1= new WP_Query($args);
        while ($query1->have_posts()):
            $query1->the_post();
            get_template_part('partials/content/','news-recap');
        endwhile;
        wp_reset_query();
        ?>
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
</main>
    <?php
/*Front page Template End */

get_footer();
?>
