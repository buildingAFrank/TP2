<?php

get_header();

?>

<main class="main-content">

<?php
    $today = date('Ymd');
    //evenement a venir
    $argsFutur=array(
        'category_name' => 'evenement',
        'posts_per_page'=> -1,
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
    $argsPasse=array(
        'category_name' => 'evenement',
        'posts_per_page'=> -1,
        'meta_key'      =>'date-evenement',
        'orderby'       => 'meta_value_num',
        'order'         => 'ASC',
        'meta_query'    =>array(
            array(
                'key'       =>'date-evenement',
                'compare'   =>'<',
                'value'     => $today
            )
        )
    );

    $query1= new WP_Query($argsFutur);
    if($query1->have_posts()) {
        echo '<section class="eventsSection">
        <h2 class="eventsTitle">Prochains événements</h2>
        <div class="eventsMain">';
        while ($query1->have_posts()):
            $query1->the_post();
            get_template_part('partials/content/', 'description-evenement');
        endwhile;
        echo ' </div>';
        wp_reset_query();
    }

    $query2= new WP_Query($argsPasse);
    if($query2->have_posts()){
        echo'
            <h2 class="eventsTitle">Événements passés</h2>
            <div class="eventsMain">';
        while ($query2->have_posts()):
            $query2->the_post();
            get_template_part('partials/content/','description-evenement');
        endwhile;
        echo '</div>';
    }
        wp_reset_query();
    echo '    </section>
        </main>';
    get_footer();


