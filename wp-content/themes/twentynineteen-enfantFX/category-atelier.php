<?php

get_header();


get_template_part('partials/content/','hero-banner');

?>


    <main class="main-content">

<?php
//start the loop
$args=array(
    'category_name' => 'atelier',
    'posts_per_page'=> -1,
    'orderby'=>'post_name',
    'order'=>'asc'
);
$query1= new WP_Query($args);
$inc=0;
if($query1->have_posts()){
    echo '<section>
            <h2 class="ateliers-title">nos ateliers</h2>
            <div class="atelier-grid">
        
        ';
    while ($query1->have_posts()):
        $inc+=1;
        $query1->the_post();
        get_template_part('partials/content/','atelier-card');
    endwhile;
    wp_reset_query();

    echo ' </div>
            </section>';
}

get_footer();
?>