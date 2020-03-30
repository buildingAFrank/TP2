<?php
/*Front page Template */

get_header();

?>

<main class="main-content">
<!--    ajout du block de Gutenber-->
    <?php
    //start the loop
    $args=array(
        'category_name' => 'gutenberg',
        'posts_per_page'=> 1
    );
    $query1= new WP_Query($args);

    if($query1->have_posts()){
        echo "
                <h2 class=\"recapHeader\">Gutenberg</h2>";

        while ($query1->have_posts()):

            $query1->the_post();
            echo"<div>".the_content()."</div>";

        endwhile;
        wp_reset_query();
        echo "
            </div>
            
        ";
    }

    ?>

    <h3>Notre atelier le plus aprecier de l'annee</h3>
    <?php

    get_template_part('partials/content/','animation');
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
$today = date('Ymd');
    $args=array(
            'category_name' => 'evenement',
            'posts_per_page'=> 3,
            'meta_key'      =>'date-evenement',
            'orderby'       => 'meta_value_num',
            'order'         => 'ASC',
            'meta_query'    =>array(
                        array(
                                'key'       =>'date-evenement',
                                'compare'   =>'>=',
                                'value'     => $today
                        )
            )

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

</main>
    <?php
/*Front page Template End */
    get_footer();
?>
