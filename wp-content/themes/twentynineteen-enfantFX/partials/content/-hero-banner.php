<?php

echo"
    <div class=\"hero\">
        <div class=\"hero__content\">
            <h1 class=\"hero__title\">";
            if(is_home()){
                echo"Accueil";
            } else{
               echo get_the_category()[0]->name;
            }
            echo "</h1>
            <p class=\"hero__text\">";
            if(is_home()){
    echo"Bienvenue sur le site";
} else{
    echo get_the_category()[0]->category_description;
}
echo"</p>
            <input type=\"button\" class=\"hero__cta\" value=\"Call To Action\">
        </div>
    </div>
    
";

wp_reset_query();

