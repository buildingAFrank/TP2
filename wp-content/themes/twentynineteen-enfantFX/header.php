<?php
/* Main Header Template */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head()?>
</head>
<body>
<header class="header">

    <nav class="menu">
        <img src="https://placekitten.com/70/70" alt="" class="siteLogo">
<!--        <img src="            "--><?php ////bloginfo('template_url')" ?><!--" alt="">-->
        <input type="checkbox" id="burger">
         <label for="burger"><i class="fas fa-bars"></i></label>
        <?php
            wp_nav_menu($arg = array(
                'menu_class' => 'menu-navigation',
                'theme_location' =>'primary'
            ));
        ?>

    </nav>
</header>
<?php
do_action ( '__after_header' );
?>
