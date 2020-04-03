<?php
get_header();
    //start the loop

$today = date('Ymd');
$in3months=date('Ymd', strtotime("+3 months", strtotime($today)));

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
            'compare'   =>'>',
            'value'     => $today
        ),
        array(
            'key'=>'date-evenement',
            'compare'=> '<',
            'value'=>$in3months
        )
    )
);
    $query1= new WP_Query($argsFutur);
    if($query1->have_posts()){
        echo "<section class=\"eventCalendar\">
                <h2 class=\"calendarHeader\">Nos événements importants des 3 prochains mois </h2>
                <div class=\"calendarGrid\">
                <div style='grid-column: 1/span 1;grid-row:1/ span 1; text-align:center;'>Lundi</div>
                <div style='grid-column: 2/span 1;grid-row:1/ span 1; text-align:center;'>Mardi</div>
                <div style='grid-column: 3/span 1;grid-row:1/ span 1; text-align:center;'>Mercredi</div>
                <div style='grid-column: 4/span 1;grid-row:1/ span 1; text-align:center;'>Jeudi</div>
                <div style='grid-column: 5/span 1;grid-row:1/ span 1; text-align:center;'>Vendredi</div>
                <div style='grid-column: 6/span 1;grid-row:1/ span 1; text-align:center;'>Samedi</div>
                <div style='grid-column: 7/span 1;grid-row:1/ span 1; text-align:center;'>Dimanche</div>";

        while ($query1->have_posts()):
            $query1->the_post();
                get_template_part('partials/content/','calendar-data');
        endwhile;
        wp_reset_query();
        echo"   
               <div class='modal' style=\"display:none;\">
                  <span class='modal-content'>click to close</span>
                </div>
              <div class='modal-overlay' style=\"display:none;\">
              </div>
              </div>
                </section>";
    }
get_footer();
?>
