<?php 
//https://developer.wordpress.org/themes/basics/template-files/#using-template-files // on séparer le header dans un fichier seul pour que toutes les pages puisse l'utiliser et qu'il ne faille modifier le header qu'à un seul endroit. 
get_header();
get_template_part('templates/banner');
get_template_part('templates/about');
get_template_part('templates/industries');
get_template_part('templates/services');
get_template_part('templates/blog');
get_template_part('templates/contact');
?>


    <?php
// https://developer.wordpress.org/themes/basics/template-files/#using-template-files
// Ajout d'un fichier footer.php pour y mettre le footer
get_footer();
?>    