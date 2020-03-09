<?php
/* Main Header Template */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head()?>
</head>
<body>
<header class="header">

    <nav class="menu">
        <img src="https://placekitten.com/70/70" alt="" class="siteLogo">
<!--        <img src="            "--><?php ////bloginfo('template_url')" ?><!--" alt="">-->
        <input type="checkbox" name="burger">
        <!-- <label for="burger"></label> -->
        <?php
            wp_nav_menu($arg = array(
                'menu_class' => 'menu-navigation',
                'theme_location' =>'primary'
            ));
        ?>

    </nav>
</header>
