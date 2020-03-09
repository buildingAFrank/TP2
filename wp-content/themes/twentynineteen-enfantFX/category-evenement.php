<?php
get_header();

get_template_part('partials/content/','hero-banner');

?>
<main class="main-content">

    <?php
    //start the loop
    $args=array(
        'category_name' => 'evenement',
        'posts_per_page'=> -1,
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
</main>