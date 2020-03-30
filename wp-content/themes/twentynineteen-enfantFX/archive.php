<?php
/*Main Template Files*/

get_header();

$catName=get_the_category()[0]->category_nicename;
$args=array(
    'category_name'=> $catName,
    'post_pre_page'=> -1,
    'orderby'=>'date'
);

?>

    <section class="main-archive-content">
        <?php
        $query1= new WP_Query($args);
        if($query1->have_posts()) {
            echo '<section class="default-category">
                    <h2 class="category-header">Toutes les '.(get_the_category()[0]->cat_name).'s </h2>
                    <div class="postMain">';
            while ($query1->have_posts()):
                $query1->the_post();
                get_template_part('partials/content/', 'generic-category-template');
            endwhile;
            wp_reset_query();
        }
        ?>
        </div>
    </section>


<?php
get_footer();

?>