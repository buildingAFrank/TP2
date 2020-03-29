<?php
get_header();
    //start the loop
    $args=array(
        'category_name' => 'evenement',
        'posts_per_page'=> -1
    );
    $query1= new WP_Query($args);
    if($query1->have_posts()){
        echo "<section class=\"eventCalendar\">
                <h2 class=\"calendarHeader\">Nos evenements importantes des 3 prochains mois </h2>
                <div class=\"calendarGrid\">";
        while ($query1->have_posts()):
            $query1->the_post();
            $time= strtotime(get_field('date-evenement',$post->ID));

            if(date('m',$time)>date('m') && date('m',$time)<=(date('m')+3))
                get_template_part('partials/content/','calendar-data');
        endwhile;
        wp_reset_query();
        echo"   </div>
                </section>";
    }
get_footer();
?>
