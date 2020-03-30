<?php

echo"
    <div class=\"hero\">
        <div class=\"hero__content\">
            <h1 class=\"hero__title\">";
            if(is_home()){
                echo"Accueil";
            } else {
               wp_title('');
            }
            echo "</h1>
            <span class='titleAnim'></span>
            <p class=\"hero__text\">";
            if(is_home()){
    echo"Bienvenue sur le site";
} else if( is_category( )) {
             echo   get_the_category()[0]->category_description;
            }
            else {

}
echo"</p>
            <input type=\"button\" class=\"hero__cta animation-bouton\" value=\"Call To Action\">
        </div>
    </div>
    
";

wp_reset_query();

