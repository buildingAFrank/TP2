<?php
  /*Main Template Files*/

get_header();

?>

<section class="main-content">

    <h4>You landed here</h4>
    <h1><?php echo get_the_title(); ?></h1>
        <?php
            //start the loop
            if(have_posts()):
                while (have_posts()):
                    the_post();
                        the_content();
                endwhile;
            endif;

        ?>

</section>


<?php


?>