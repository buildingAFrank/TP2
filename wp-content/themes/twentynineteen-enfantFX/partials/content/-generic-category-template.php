<?php
?>


<div class="generic-box">
    <div class="generic-legend">
        <h3 class="generic-title"><?php echo get_the_title(); ?></h3>
        <h4 class="generic-author"><?php echo get_the_author(); ?></h4>
        <span class="generic-date"><?php echo get_the_date(); ?></span>
    </div>
    <p class="generic-text"><?php echo get_the_excerpt(); ?></p>
    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="generic-link"> Lire plus</a>
</div>
