<?php
/*Front page Template */

get_header();


get_template_part('partials/content/','hero-banner');

?>


<main class="main-content">
    <!--    ajout de la section nouvelles-->
    <?php
    //start the loop
    $args=array(
        'category_name' => 'nouvelle',
        'posts_per_page'=> 3
    );
    $query1= new WP_Query($args);
    if($query1->have_posts()){
        echo "<section class=\"newsSection\">
    
                <h2 class=\"recapHeader\">Dernières Nouvelles</h2>
                <div class=\"recapContainer\">";
        while ($query1->have_posts()):
            $query1->the_post();
            get_template_part('partials/content/','news-recap');
        endwhile;
        wp_reset_query();
        echo "
            </div>
            </section>
        ";
    }

    ?>

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
        echo '<section class="eventsSection">
        <h2 class="eventsTitle">Prochains Évenements</h2>
        <div class="eventsPreview">';
            while ($query1->have_posts()):
                $query1->the_post();
                get_template_part('partials/content/','event-card');
            endwhile;
            wp_reset_query();

        echo ' </div>
            </section>';
        }


?>
<!--ajout du calendrier des conference-->
<?php
    //start the loop
    $args=array(
        'category_name' => 'evenement',
        'posts_per_page'=> -1
    );
    $query1= new WP_Query($args);
    if($query1->have_posts()){
        echo "<section class=\"eventCalendar\">
                <h2 class=\"calendarHeader\">Nos conférences importantes de 2019 </h2>
                <div class=\"calendarGrid\">";
        while ($query1->have_posts()):
            $query1->the_post();
            if(get_the_date('m')>8 && get_the_date('m')<12)
                get_template_part('partials/content/','calendar-data');
        endwhile;
        wp_reset_query();
        echo"   </div>
                </section>";
    }

?>

</main>
    <?php
/*Front page Template End */

get_footer();
?>
