<?php

get_header();

?>

<main class="main-content">

    <?php
    //start the loop
    $args=array(
        'category_name' => 'nouvelle',
        'posts_per_page'=> -1,
        'orderby'=>'date',
        'order'=>'DESC'
    );
    $query1= new WP_Query($args);
    if($query1->have_posts()){
        echo '<section class="newsSection">
        <h2 class="recapHeader">Toutes les nouvelles</h2>
        <div class="newsMain">';
        while ($query1->have_posts()):
            $query1->the_post();
            get_template_part('partials/content/','news-recap');
        endwhile;
        wp_reset_query();

        echo ' </div>
            </section>';
    }
    ?>
</main>
<?php get_footer(); ?>