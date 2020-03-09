<?php
/*Front page Template */

get_header();


get_template_part('partials/content/','hero-banner');

?>


<main class="main-content">

<?php
    //start the loop
    $args=array(
            'category_name' => 'evenements',
            'posts_per_page'=> 3,
            'orderby'=>'date',
            'order'=>'DESC'
    );
    $query1= new WP_Query($args);
    if($query1->have_posts()){
        echo '<section>
        <h2>prochains evenements</h2>
        <div class="eventPreview">';
            while ($query1->have_posts()):
                $query1->the_post();
                get_template_part('partials/content/','event-card');
            endwhile;
            wp_reset_query();

        echo ' </div>
            </section>';
        }


?>

<!--    ajout de la section nouvelles-->
<?php
    //start the loop
    $args=array(
        'category_name' => 'nouvelle',
        'posts_per_page'=> 3
    );
    $query1= new WP_Query($args);
    if($query1->have_posts()){
        echo "<section class=\"newsRecap\">
    
                <h2 class=\"recapHeader\">Dernieres Nouvelles</h2>
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

<!--ajout du calendrier des evenements-->
<?php
    //start the loop
    $args=array(
        'category_name' => 'conference',
        'posts_per_page'=> -1
    );
    $query1= new WP_Query($args);
    if($query1->have_posts()){
        echo "<section class=\"eventCalendar\">
                <h2 class=\"calendarHeader\">Nos conferences importantes de 2019 </h2>
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
