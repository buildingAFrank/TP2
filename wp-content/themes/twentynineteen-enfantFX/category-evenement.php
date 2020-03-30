<?php

get_header();

?>

<main class="main-content">

    <?php
    //start the loop
    $args=array(
        'category_name' => 'evenement',
        'posts_per_page'=> -1,
        'meta_key'=> 'date-evenement',
        'orderby'=>'meta_value_num',
        'order'=>'ASC'
    );
    $query1= new WP_Query($args);
    if($query1->have_posts()){
        echo '<section class="eventsSection">
        <h2 class="eventsTitle">prochains événements</h2>
        <div class="eventsMain">';
        while ($query1->have_posts()):
            $query1->the_post();
            $time= strtotime(get_field('date-evenement',$post->ID));

            if(date('md',$time)>=date('md'))
            get_template_part('partials/content/','event-card');
        endwhile;

        echo ' </div>
                <h2 class="eventsTitle">événements passe</h2>
                <div class="eventsMain">';
        while ($query1->have_posts()):
            $query1->the_post();
            $time= strtotime(get_field('date-evenement',$post->ID));

            if(date('md',$time)<=date('md')){
                get_template_part('partials/content/','event-card');
            }

        endwhile;
        echo '</div>';
    }
        wp_reset_query();
    echo '    </section>
        </main>';
    get_footer();


